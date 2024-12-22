<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actor>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'birth_date' => $this->faker->date('Y-m-d', '-18 years'), // Ensure the actor is at least 18
            'biography' => $this->faker->paragraph,
            'gender' => $this->faker->randomElement(['Masculí', 'Femení']),
            'image' => $this->faker->imageUrl(300, 400, 'people', true, 'Actor'), // Fake image URL
        ];
    }
}
