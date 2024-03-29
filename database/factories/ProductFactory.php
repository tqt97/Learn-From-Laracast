<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'T-Shirt',
                'Jacket',
                'Shoes',
                'Jeans',
                'Socks',
                'Hoodie',
                'Pants',
                'Sweater',
                'Trousers',
                'Gloves',
            ]),
            'description' => $this->faker->paragraph(2, true),
            'price' => fake()->numberBetween(5_00, 45_00),

        ];
    }
}
