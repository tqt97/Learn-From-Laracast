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
        return [
            'path' => $this->faker->unique()->randomElement([
                'https://picsum.photos/id/237/200/300',
                'https://picsum.photos/id/238/200/300',
                'https://picsum.photos/id/239/200/300',
                'https://picsum.photos/id/240/200/300',
                'https://picsum.photos/id/241/200/300',
                'https://picsum.photos/id/242/200/300',
                'https://picsum.photos/id/243/200/300',
                'https://picsum.photos/id/244/200/300',
                'https://picsum.photos/id/245/200/300',
                'https://picsum.photos/id/246/200/300',
                'https://picsum.photos/id/247/200/300',
                'https://picsum.photos/id/248/200/300',
                'https://picsum.photos/id/249/200/300',
                'https://picsum.photos/id/250/200/300',
                'https://picsum.photos/id/251/200/300',
                'https://picsum.photos/id/252/200/300',
                'https://picsum.photos/id/253/200/300',
                'https://picsum.photos/id/254/200/300',
                'https://picsum.photos/id/255/200/300',
                'https://picsum.photos/id/256/200/300',
                'https://picsum.photos/id/257/200/300',
                'https://picsum.photos/id/258/200/300',
                'https://picsum.photos/id/259/200/300',
                'https://picsum.photos/id/260/200/300',
                'https://picsum.photos/id/261/200/300',
                'https://picsum.photos/id/262/200/300',
                'https://picsum.photos/id/263/200/300',
                'https://picsum.photos/id/264/200/300',
            ]),
        ];
    }
}
