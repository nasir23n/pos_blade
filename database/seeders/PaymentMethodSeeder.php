<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::insert([
            [
                'name' => 'Cash',
                // 'image',
                'status' => 1,
                'is_default' => 1,
            ],
            [
                'name' => 'Card',
                // 'image',
                'status' => 1,
                'is_default' => 0,
            ],
            [
                'name' => 'Bksh',
                // 'image',
                'status' => 1,
                'is_default' => 0,
            ],
            [
                'name' => 'Nogod',
                // 'image',
                'status' => 1,
                'is_default' => 0,
            ],
        ]);
    }
}
