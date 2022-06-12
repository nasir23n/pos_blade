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
        DB::beginTransaction();
        // DB::transaction(function() use($request) {
            $purchase = Purchase::create([
                'supplier_id' => $request->supplier_id,
                'created_by' => auth()->user()->id,
                'total_price' => 0,
                'purchase_no' => get_serial_no('purchases', 'purchase_no'),
                'other_charge' => 0,
                'date' => $request->date,
                'discount_all' => 0,
                'discount_type' => 'Fixed',
                'paid_amount' => ($request->amount) ? $request->amount : 0,
                'due_amount' => 0,
                // 'purchase_status' => $request->purchase_status,
            ]);
            $total = 0;
            // dd($request->quantity[1]);
            // dd($request->all());
            foreach ($request->product_id as $key => $id) {
                $product = Product::find($id);
                $sub_total = $product->latest_price->purchase_price * $request->quantity[$key];

                // $price = $product->price()->create([
                //     'sell_price' => $request->sell_price[$key],
                //     'purchase_price' => $request->purchase_price[$key],
                //     'updated_by' => auth()->user()->id,
                //     'effected_date' => Carbon::now(),
                // ]);

                $purchase->details()->create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $id,
                    'price_id' => $product->latest_price->id,
                    // 'price_id' => $price->id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);

                // $product->stock()->update([
                //     'available_qty' => $product->stock->available_qty + $request->quantity[$key],
                //     'purchased_qty' => $product->stock->purchased_qty + $request->quantity[$key],
                // ]);
                $total += $sub_total;
            }
            $total += $request->other_charges_input;

            $discount_amount = 0;
            if ($request->discount_type == 'Fixed') {
                $discount_amount =  $request->discount_all_input;
            }
            else if ($request->discount_type == 'Per') {
                $discount_amount =  ($request->discount_all_input / 100) * $total;
            }

            // discount_amount
            $purchase->update([
                'total_price' => $total,
                'discount_amount' => $discount_amount,
                'due_amount' => $total - ($request->amount ? $request->amount : 0)
            ]);

            if ($request->amount) {
                $purchase->payment()->create([
                    'amount' => $request->amount,
                    'payment_method_id' => 1,
                    'note' => $request->payment_note,
                    'created_by' => auth()->user()->id,
                    // 'payable' => '',
                ]);
            }

        // });
        DB::commit();
        // dd($request->all());
        return redirect()->route('admin.purchase.show', $purchase->id)->with('success', 'Purchase Create Successfully');
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
            'purchase_status' => 'Received',
        ]);
        DB::commit();
        return back()->with('success', 'Purchesed Received.');
    }

    public function show(Purchase $purchase) {
        return view('backend.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase) {
        $suppliers = Supplier::all();
        $payment_methods = PaymentMethod::all();
        return view('backend.purchase.edit', compact('purchase', 'suppliers', 'payment_methods'));
    }
}
