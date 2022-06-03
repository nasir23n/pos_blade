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
        return view('backend.purchase.create', $this->data);
    }

    public function filterProduct(Request $request) {
        $products = Product::with('latest_price')->paginate(5);
        return view('backend.purchase.filter_product', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'supplier_id' => 'required',
            'date' => 'required',
            'purchase_status' => 'required'
        ]);
        DB::transaction(function() use($request) {
            $purchase = Purchase::create([
                'supplier_id' => $request->supplier_id,
                'created_by' => auth()->user()->id,
                'total_price' => 0,
                'other_charge' => $request->other_charges_input,
                'date' => $request->date,
                'paid_amount' => $request->amount ? $request->amount : 0,
                'due_amount' => 0,
                'purchase_status' => $request->purchase_status,
            ]);
            $total = 0;
            foreach ($request->product_id as $key => $id) {
                $product = Product::find($id);
                $sub_total = $request->purchase_price[$key] * $request->quantity[$key];

                $price = $product->price()->create([
                    'sell_price' => $request->sell_price[$key],
                    'purchase_price' => $request->purchase_price[$key],
                    'updated_by' => auth()->user()->id,
                    'effected_date' => Carbon::now(),
                ]);


                $purchase->details()->create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $id,
                    'price_id' => $price->id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);

                $product->stock()->update([
                    'available_qty' => $product->stock->available_qty + $request->quantity[$key],
                    'purchased_qty' => $product->stock->purchased_qty + $request->quantity[$key],
                ]);
                $total += $sub_total;
            }
            $purchase->update([
                'total_price' => $total,
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

        });
        // dd($request->all());
        return back()->with('success', 'Purchase Create Successfully');
    }

    public function show(Purchase $purchase) {
        // dd($purchase);
        return view('backend.purchase.show', compact('purchase'));
    }
}
