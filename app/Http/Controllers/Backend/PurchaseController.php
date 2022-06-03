<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function index() {
        // $purchases = Purchase::all();
        return view('backend.purchase.index');
    }

    public function create() {
        $this->data['suppliers'] = Supplier::all();
        strip_tags('some');
        return view('backend.purchase.create', $this->data);
    }

    public function filterProduct(Request $request) {
        $products = Product::with('latest_price')->paginate(5);
        return view('backend.purchase.filter_product', compact('products'));
    }

    public function store(Request $request) {
        DB::transaction(function() use($request) {
            $purchase = Purchase::create([
                'supplier_id' => $request->supplier_id,
                'created_by' => auth()->user()->id,
                'total_price' => 0,
                'other_charge' => $request->other_charges_input,
                'date' => $request->date,
                'paid_amount' => $request->amount,
                'due_amount' => $request->amount,
                'purchase_status' => $request->purchase_status,
            ]);
            $total = 0;
            foreach ($request->product_id as $key => $id) {
                $product = Product::find($id);
                $sub_total = $request->purchase_price[$key] * $request->quantity[$key];
                PurchaseDetails::create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $id,
                    'quantity' => $request->quantity[$key],
                    'total' => $sub_total,
                ]);
                $product->update([
                    'purchase_price' => $request->purchase_price[$key],
                ]);
                $total += $sub_total;
            }
            $purchase->update([
                'total_price' => $total,
                'due_amount' => $total - $request->amount
            ]);
        });
        // dd($request->all());
        return back()->with('success', 'Purchase Create Successfully');
    }
}
