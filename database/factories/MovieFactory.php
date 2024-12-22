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
            'title' => $this->faker->sentence(3), // Fake title with 3 words
            'description' => $this->faker->paragraph,
            'director' => $this->faker->name,
            'year' => $this->faker->year,
            'genre' => $this->faker->randomElement(['Drama', 'Comèdia', 'Acció', 'Ciència-ficció']),
            'image' => $this->faker->imageUrl(400, 600, 'movies', true, 'Movie'), // Fake movie poster URL
        ];
    }
}
