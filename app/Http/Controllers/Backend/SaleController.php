<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index() {
        $this->data['sales'] = Sale::all();
        $this->data['payment_methods'] = PaymentMethod::all();

        return view('backend.sales.index', $this->data);
    }
    public function create() {
        $this->data['customers'] = Customer::all();
        $this->data['payment_methods'] = PaymentMethod::all();
        return view('backend.sales.create', $this->data);
    }

    public function get_products(Request $request) {
        $products = Product::with('latest_price')->paginate(5);
        return view('backend.sales.filter_product', compact('products'));
    }

    public function filterProduct(Request $request) {
        $products = Product::with('latest_price')->where('name', 'like', '%'.$request->name.'%')->paginate(5);
        return view('backend.sales.product_grid', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'customer_id' => 'required',
            'date' => 'required',
            // 'sell_status' => 'required'
        ]);
        // dd($request->all());
        DB::transaction(function() use($request) {
            $sales = Sale::create([
                'customer_id' => $request->customer_id,
                'created_by' => auth()->user()->id,
                'total_price' => 0,
                'other_charge' => 0,
                'date' => $request->date,
                'discount_all' => 0,
                'discount_type' => 'Fixed',
                'paid_amount' => $request->amount ? $request->amount : 0,
                'due_amount' => 0,
                'sell_status' => 'Pending',
            ]);
            $total = 0;
            foreach ($request->product_id as $key => $id) {
                $product = Product::find($id);
                $latest_price = $product->latest_price;
                $sub_total = $latest_price->sell_price * $request->quantity[$key];

                $sales->details()->create([
                    'purchase_id' => $sales->id,
                    'product_id' => $id,
                    'price_id' => $latest_price->id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);

                $product->stock()->update([
                    'available_qty' => $product->stock->available_qty - $request->quantity[$key],
                    // 'purchased_qty' => $product->stock->purchased_qty + $request->quantity[$key],
                ]);
                $total += $sub_total;
            }
            // $total += $request->other_charges_input;


            $sales->update([
                // 'discount_amount' => $discount_amount,
                'total_price' => $total,
                'due_amount' => $total - ($request->amount ? $request->amount : 0)
            ]);
 
            if ($request->amount) {
                $sales->payment()->create([
                    'amount' => $request->amount,
                    'payment_method_id' => 1,
                    'note' => $request->payment_note,
                    'created_by' => auth()->user()->id,
                    // 'payable' => '',
                ]);
            }

        });
        // dd($request->all());
        return redirect()->route('admin.sales.index')->with('success', 'Sales Create Successfully');
    }

    public function confirm(Sale $sale) {
        $sale->update([
            'sales_status' => 'Complete',
        ]);
        return redirect()->route('admin.sales.index')->with('success', 'Sales Confirm Successfully');
    }

    public function payment(Request $request) {
        $sale = Sale::find($request->sale_id);
        if ($sale) {
            if ($sale->due_amount < $request->amount) {
                return 'error';
            }
            $sale->payment()->create([
                'amount' => $request->amount,
                'payment_method_id' => $request->payment_method ? $request->payment_method : 1,
                'note' => $request->payment_note,
                'created_by' => auth()->user()->id,
            ]);
            $sale->update([
                'paid_amount' => $sale->paid_amount + $request->amount,
                'due_amount' => $sale->total_price - ($sale->paid_amount + $request->amount)
            ]);
            $due_amount = '<div class="check_wrap">';
            $due_amount .= ($sale->due_amount > 0) ? '<span class="check danger"></span> '.$sale->due_amount.'TK' : '<span class="check success"></span> '.$sale->due_amount.'TK';
            $due_amount .= '</div>';

            return response()->json([
                'paid_amount' => $sale->paid_amount,
                'due_amount' => $due_amount
            ]);
        }
        return 'error';
    }

    public function view_payments(Sale $sale) {
        return view('backend.sales.view_payments', compact('sale'));
    }
    public function delete_payment(Request $request ,Payment $payment) {
        $request->validate([
            'sale_id' => 'required'
        ]);
        $sale = Sale::find($request->sale_id);
        $sale->update([
            'paid_amount' => $sale->paid_amount - $payment->amount,
            'due_amount' => $sale->due_amount + $payment->amount,
        ]);
        $payment->delete();
        return back()->with('success', 'Payment delete Successfully');
    }

    public function show(Sale $sale) {
        return view('backend.sales.show', compact('sale'));
    }

    public function edit(Sale $sale) {
        return view('backend.sales.edit', compact('sale'));
    }

    public function delete(Sale $sale) {
        // dd($sale->payment);
        $sale->details()->delete();
        $sale->payment()->delete();
        $sale->delete();
        return back()->with('success', 'Sales Delete Successfully');
    }
}
