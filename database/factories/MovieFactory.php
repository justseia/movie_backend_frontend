<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText(20),
            'body' => fake()->text(),
            'image' => fake()->imageUrl(),
            'url' => fake()->url(),
            'type_id' => fake()->numberBetween(1, 3),
        ];
    }
}
