<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Price;
use App\Models\Product;
use App\Models\Unit;
use App\Traits\FileSaver;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    use FileSaver;

    public function index() {
        $products =  Product::paginate(10);
        return view('backend.product.index', compact('products'));
    }
    public function create() {
        $this->data['categories'] = Category::all();
        $this->data['brands'] = Brand::all();
        $this->data['units'] = Unit::all();

        return view('backend.product.create', $this->data);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required',
            'sell_price' => 'required',
            'purchase_price' => 'required',
            'unit_id' => 'required',
        ]);

        DB::transaction(function() use($request) {

            $product = Product::create([
                'name' => $request->name,
                'alert_qty' => $request->alert_qty,
                'opening_qty' => $request->opening_qty,
                'referrance_no' => rand(10000000, 9999999),
                'warranty_days' => $request->warranty_days,
                'guarantee_days' => $request->guarantee_days,
                'discount' => $request->discount,
                'discount_type' => $request->discount_type,
                'sku' => $request->sku,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'created_by' => auth()->user()->id,
                'unit_id' => $request->unit_id,
            ]);
            $price = Price::create([
                'product_id' => $product->id,
                'effected_date' => Carbon::now('Asia/Dhaka'),
                'sell_price' => $request->sell_price,
                'purchase_price' => $request->purchase_price,
                'updated_by' => auth()->user()->id,
            ]);
            $product->stock()->create([
                'available_qty' => 0,
                'purchased_qty' => 0,
                'sold_qty' => 0,
            ]);

            if ($request->hasFile('image')) {
                $this->upload_file($request->image, $product, 'image', 'product/');
            }
        });
        return redirect()->route('admin.product.index')->with('success', 'Product Created Successfully');
    }

    public function delete(Product $product) {
        // $product->price->delete();
        // $product->delete();
    }
}
