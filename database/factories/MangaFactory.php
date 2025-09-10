<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

final class MangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::random(10),
            'start_year' => (int) date('Y') - 1,
            'end_year' => (int) date('Y'),
            'volume_number' => $this->faker->randomNumber(1),
            'author_id' => null,
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Manga $manga): void {
            if (! $manga->author_id) {
                $manga->author()->associate(Author::factory()->create());
            }
        });
    }
}
