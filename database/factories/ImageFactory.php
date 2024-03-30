<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arr = [];
        for ($i = 1; $i <= 60; $i++) {
            $arr[] =  'https://picsum.photos/800/600?image=' . $i;
        };
        return [
            'path' => $this->faker->randomElement($arr),
        ];
    }
}
