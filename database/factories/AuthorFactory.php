<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

final class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'year_of_birth' => date('Y') - 35,
            'year_of_death' => null,
            'biography' => $this->faker->text(),
        ];
    }
}
