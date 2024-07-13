<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $imageNumber = 1;
        return [
            'title' => fake()->sentence(2),
            'description' => fake()->sentence(3),
            'price' => fake()->randomNumber(5, true),
            'stock' => fake()->numberBetween(20, 200),
            // 'image' => fake()->imageUrl(640, 480, 'animals', true),
            'image' => '/images/merchandise-' . $imageNumber++ . '.png',
        ];
    }
}
