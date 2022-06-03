<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $units = Unit::all();
        return [
            'name' => $this->faker->name(),
            'alert_qty' => rand(10,30),
            'opening_qty' => rand(5,50),
            'referrance_no' => $this->faker->unique()->randomNumber(5),
            // 'warranty_days' => $request->warranty_days,
            // 'guarantee_days' => $request->guarantee_days,
            // 'discount' => $request->discount,
            // 'discount_type' => $request->discount_type,
            'image' => '_uploads\product\2022\1654084340.png',
            'sku' => $this->faker->randomNumber(),
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'created_by' => 1,
            'unit_id' => $units->random()->id,
        ];
    }
}
