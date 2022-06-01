<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index() {
        // $purchases = Purchase::all();
        return view('backend.purchase.index');
    }

    public function create() {
        $this->data['suppliers'] = Supplier::all();
        return view('backend.purchase.create', $this->data);
    }

    public function filterProduct(Request $request) {
        $products = Product::with('latest_price')->paginate(10);
        return view('backend.purchase.filter_product', compact('products'));
    }
}
