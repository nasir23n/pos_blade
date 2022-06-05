<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index() {
        $this->data['sales'] = Sale::all();
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
            'sell_status' => 'required'
        ]);
        // dd($request->all());
        DB::transaction(function() use($request) {
            $sales = Sale::create([
                'customer_id' => $request->customer_id,
                'created_by' => auth()->user()->id,
                'total_price' => 0,
                'other_charge' => $request->other_charges_input,
                'date' => $request->date,
                'discount_all' => $request->discount_all_input,
                'discount_type' => $request->discount_type,
                'paid_amount' => $request->amount ? $request->amount : 0,
                'due_amount' => 0,
                'sell_status' => $request->sell_status,
            ]);
            $total = 0;
            foreach ($request->product_id as $key => $id) {
                $product = Product::find($id);
                $latest_price = $product->latest_price;
                $sub_total = $latest_price->sell_price * $request->quantity[$key];
                // dd($sub_total);
                // $price = $product->price()->create([
                //     'sell_price' => $request->sell_price[$key],
                //     'sell_price' => $request->sell_price[$key],
                //     'updated_by' => auth()->user()->id,
                //     'effected_date' => Carbon::now(),
                // ]);

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
            $total += $request->other_charges_input;
            if ($request->discount_type == 'Fixed') {
                $total =  $total - $request->discount_all_input;
            }
            else if ($request->discount_type == 'Per') {
                $total =  $total - (($request->discount_all_input / 100) * $total);
            }

            $sales->update([
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
        return back()->with('success', 'Sales Create Successfully');
    }

    public function show(Sale $sale) {
        return view('backend.sales.show', compact('sale'));
    }
}
