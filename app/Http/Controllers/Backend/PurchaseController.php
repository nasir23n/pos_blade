<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function index() {
        $this->data['purchases'] = Purchase::all();
        $this->data['payment_methods'] = PaymentMethod::all();
        return view('backend.purchase.index', $this->data); 
    }

    public function create() {
        $this->data['suppliers'] = Supplier::all();
        $this->data['payment_methods'] = PaymentMethod::orderBy('is_default', 'DESC')->get();
        $this->data['purchase_no'] = get_serial_no('purchases', 'purchase_no');
        return view('backend.purchase.create', $this->data);
    }

    public function get_products(Request $request) {
        $products = Product::with('latest_price')->paginate(5);
        return view('backend.purchase.filter_product', compact('products'));
    }
    public function add_products(Request $request, Purchase $purchase) {
        $products = Product::with('latest_price')->paginate(5);
        return view('backend.purchase.add_products', compact('products', 'purchase'));
    }
    public function store_products(Request $request, Purchase $purchase) {
        // return $request->all();
        // $products = Product::with('latest_price')->paginate(5);
        // return view('backend.purchase.add_products', compact('products', 'purchase'));
    }

    public function view_payments(Purchase $purchase) {
        return view('backend.purchase.view_payments', compact('purchase'));
    }

    public function payment(Request $request) {
        $purchase = Purchase::find($request->purchase_id);
        if ($purchase) {
            if ($purchase->due_amount < $request->amount) {
                return 'error';
            }
            $purchase->payment()->create([
                'amount' => $request->amount,
                'payment_method_id' => $request->payment_method ? $request->payment_method : 1,
                'note' => $request->payment_note,
                'created_by' => auth()->user()->id,
            ]);
            $purchase->update([
                'paid_amount' => $purchase->paid_amount + $request->amount,
                'due_amount' => $purchase->total_price - ($purchase->paid_amount + $request->amount)
            ]);
            $due_amount = '<div class="check_wrap">';
            $due_amount .= ($purchase->due_amount > 0) ? '<span class="check danger"></span> '.$purchase->due_amount.'TK' : '<span class="check success"></span> '.$purchase->due_amount.'TK';
            $due_amount .= '</div>';

            return response()->json([
                'paid_amount' => $purchase->paid_amount,
                'due_amount' => $due_amount
            ]);
        }
        return 'error';
    }

    public function delete_payment(Request $request ,Payment $payment) {
        $request->validate([
            'purchase_id' => 'required'
        ]);
        $purchase = Purchase::find($request->purchase_id);
        $purchase->update([
            'paid_amount' => $purchase->paid_amount - $payment->amount,
            'due_amount' => $purchase->due_amount + $payment->amount,
        ]);
        $payment->delete();
        return back()->with('success', 'Payment delete Successfully');
    }

    public function filterProduct(Request $request) {
        $products = Product::with('latest_price')->where('name', 'like', '%'.$request->name.'%')->paginate(5);
        return view('backend.purchase.product_grid', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'supplier_id' => 'required',
            'date' => 'required',
            // 'purchase_status' => 'required'
        ]);
        // dd($request->all());
        DB::beginTransaction();

        $purchase = Purchase::create([
            'supplier_id' => $request->supplier_id,
            'created_by' => auth()->user()->id,
            'total_price' => 0,
            'purchase_no' => get_serial_no('purchases', 'purchase_no'),
            'other_charge' => $request->other_charges_input,
            'transport_cost' => $request->transport_cost_input,
            'discount_amount' => $request->discount_all_input,
            'date' => $request->date,
            'discount_type' => 'Fixed',
            'paid_amount' => ($request->amount) ? $request->amount : 0,
            'due_amount' => 0,
            // 'purchase_status' => $request->purchase_status,
        ]);
        $total = 0;
        if ($request->product_id && $request->quantity) {
            
            foreach ($request->product_id as $key => $id) {
                $product = Product::find($id);
                $sub_total = $product->latest_price->purchase_price * $request->quantity[$key];

                $purchase->details()->create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $id,
                    'price_id' => $product->latest_price->id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);

                $total += $sub_total;
            }
        }

        // discount_amount
        $purchase->update([
            'total_price' => $total,
            // 'discount_amount' => $discount_amount,
            'due_amount' => $total - ($request->amount ? $request->amount : 0)
        ]);

        if ($request->amount) {
            $purchase->payment()->create([
                'amount' => $request->amount,
                'payment_method_id' => $request->payment_method ? $request->payment_method : 1,
                'note' => $request->payment_note,
                'created_by' => auth()->user()->id,
                // 'payable' => '',
            ]);
        }

        DB::commit();
        return redirect()->route('admin.purchase.index')->with('success', 'Purchase Create Successfully');
    }

    public function confirm(Purchase $purchase) {
        if ($purchase->paid_amount <= 0) {
            return back()->with('error', 'Plese Do Transaction before confirm.');
        }
        if ($purchase->purchase_status === 'Received') {
            return back()->with('error', 'Already Received.');
        }
        DB::beginTransaction();
        foreach ($purchase->details as $key => $value) {
            $product = Product::find($value->product_id);
            $product->stock->update([
                'available_qty' => $product->stock->available_qty + $value->quantity,
                'purchased_qty' => $product->stock->purchased_qty + $value->quantity,
            ]);
        }
        
        // dd($purchase->details);
        $purchase->update([
            'purchase_status' => 'Complete',
        ]);
        DB::commit();
        return back()->with('success', 'Purchesed Complete.');
    }

    public function show(Purchase $purchase) {
        return view('backend.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase) {
        $suppliers = Supplier::all();
        $payment_methods = PaymentMethod::all();
        return view('backend.purchase.edit', compact('purchase', 'suppliers', 'payment_methods'));
    }

    public function update(Request $request ,Purchase $purchase) {

        DB::beginTransaction();
        
        $total = 0;
        $not_in = $purchase->details()->whereNotIn('product_id', $request->product_id);
        // dd($request->all());
        foreach ($request->product_id as $key => $id) {
            $item = $purchase->details()->where('product_id', $id)->first();
            $product = Product::find($id);
            $sub_total = $product->latest_price->purchase_price * $request->quantity[$key];

            if ($item) {
                $item->update([
                    // 'price_id' => $product->latest_price->id,
                    // 'price_id' => $price->id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);
            } else {
                $purchase->details()->create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $id,
                    'price_id' => $product->latest_price->id,
                    // 'price_id' => $price->id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);
            }

            $total += $sub_total;
        }
        // $total += $request->other_charges_input;

        // // discount_amount
        $purchase->update([
            'total_price' => $total,
            'other_charge' => $request->other_charges_input,
            'transport_cost' => $request->transport_cost_input,
            'discount_amount' => $request->discount_all_input,
            'date' => $request->date,
            // 'discount_amount' => $discount_amount,
            'due_amount' => $total - ($request->amount ? $request->amount + $purchase->paid_amount : $purchase->paid_amount)
        ]);

        if ($request->amount) {
            $purchase->payment()->create([
                'amount' => $request->amount,
                'payment_method_id' => $request->payment_method ? $request->payment_method : 1,
                'note' => $request->payment_note,
                'created_by' => auth()->user()->id,
                // 'payable' => '',
            ]);
        }
        // dd($purchase);
        $not_in->delete();
        DB::commit();
        return redirect()->route('admin.purchase.index')->with('success', 'Purchase Update Successfully');
    }

    public function delete(Purchase $purchase) {
        DB::beginTransaction();
        $purchase->details()->delete();
        $purchase->payment()->delete();
        $purchase->delete();
        DB::commit();
        return redirect()->route('admin.purchase.index')->with('success', 'Purchase Delete Successfully');
    }
}
