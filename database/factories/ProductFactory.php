<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'product_name' => fake()->words(2, true),

            'product_category' => fake()->randomElement([
                'Electronics',
                'Clothing',
                'Books',
                'Home & Kitchen',
            ]),

            'product_price' => fake()->randomFloat(2, 10, 9999),

            'product_stock' => fake()->numberBetween(0, 100),

            'product_description' => fake()->sentence(),
        ];
    }
}
