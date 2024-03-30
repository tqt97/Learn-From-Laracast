<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $name = $this->faker->unique()->randomElement([
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
            'Cap',
            'Sweatshirt',
            'Skirt',
            'Shorts',
            'Dress',
            'Jumpsuit',
            'Polo Shirt',
            'Golf Shirt',
            'Sweatpants',
            'Tights',
            'Hats',
            'Hoodies',
        ]);
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'description' => $this->faker->paragraph(2, true),
            'price' => fake()->numberBetween(5_00, 45_00),
            'slug' => $slug
        ];
    }
}
