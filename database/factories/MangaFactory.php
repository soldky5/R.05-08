<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name(),
            'start_year' => date('Y') - 1,
            'end_year' => date('Y'),
            'volume_number' => $this->faker->random_int(1, 10),
            'author_id' => null
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Manga $manga): void {
            if (!$manga->author_id) {
                $manga->author()->associate(Author::factory()->create());
            }
        });
    }
}
