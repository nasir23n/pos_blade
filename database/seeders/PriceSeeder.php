<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        foreach ($products as $key => $value) {
            $price = rand(20, 200);
            Price::updateOrCreate([
                'product_id' => $value->id,
                'effected_date' => Carbon::now(),
                'sell_price' => $price,
                'purchase_price' => $price,
                'updated_by' => 1,
            ]);
            Stock::updateOrCreate([
                'product_id' => $value->id,
                'available_qty' => 0,
                'purchased_qty' => 0,
                'sold_qty' => 0,
                // 'branch_id',
            ]);
        }
        // Price::updateOrCreate([
        //     'product_id',
        //     'effected_date',
        //     'sell_price',
        //     'purchase_price',
        //     'updated_by',
        // ])->sync($products->pluck('id'));

    }
}
