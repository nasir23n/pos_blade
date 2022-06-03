<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        \App\Models\Brand::factory(5)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Unit::factory(5)->create();
        \App\Models\Supplier::factory(5)->create();

        \App\Models\Product::factory(5)->create();
        $this->call(PriceSeeder::class);
        $this->call(PaymentMethodSeeder::class);
    }
}
