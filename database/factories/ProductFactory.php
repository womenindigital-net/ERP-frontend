<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
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
        return [
            'name' => $this->faker->name,
            'code' => $this->faker->unique()->postcode,
            'category_id' => Category::inRandomOrder()->first()->id,
            'unit_id' => Unit::inRandomOrder()->first()->id,
            'selling_price' => rand(80, 100),
            'making_cost' => rand(20, 80),
            'expires_at' => $this->faker->dateTimeBetween('1 month', '5 years')->format('Y-m-d'),
            'current_price' => $this->faker->randomDigit(15),
        ];
    }
}
