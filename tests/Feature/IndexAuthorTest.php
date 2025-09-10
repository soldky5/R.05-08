<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Manga;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexAuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_author(): void
    {
        // TODO 1 : Correction
        $author = Author::factory()->create();

        $response = $this->getJson(route('authors.index'));
        $response->assertOk();
        $response->assertJson([[
            'id' => $author->id,
            'name' => $author->name,
            'year_of_birth' => $author->year_of_birth,
            'year_of_death' => $author->year_of_death,
            'biography' => $author->biography
        ]]);
    }
    
    public function test_list_author_with_specific_name(): void
    {
        // TODO 3 : Correction
        $author = Author::factory()->create();
        $author2 = Author::factory()->create();

        $response = $this->getJson(route('authors.index', ['name' => $author->name]));
        $response->assertOk();
        $response->assertJson([[
            'id' => $author->id,
            'name' => $author->name,
            'year_of_birth' => $author->year_of_birth,
            'year_of_death' => $author->year_of_death,
            'biography' => $author->biography
        ]]);
        $this->assertFalse(collect($response->json())->contains(fn ($item) => $item['id'] === $author2->id));
    }
    
    public function test_list_author_with_those_mangas(): void
    {
        // TODO 5 : Correction
        $author = Author::factory()->create();
        $manga = Manga::factory()->create([
            'author_id' => $author->id
        ]);

        $response = $this->getJson(route('authors.index'));
        $response->assertJson([[
            'id' => $author->id,
            'name' => $author->name,
            'year_of_birth' => $author->year_of_birth,
            'year_of_death' => $author->year_of_death,
            'biography' => $author->biography,
            'mangas' => [[
                'id' => $manga->id,
                'title' => $manga->title,
                'start_year' => $manga->start_year,
                'end_year' => $manga->end_year,
                'volume_number' => $manga->volume_number,
            ]]
        ]]);
    }
    
    public function test_list_author_with_sort(): void
    {
        // TODO 7 : Correction
        $author = Author::factory()->create([
            'name' => 'b'
        ]);
        $author2 = Author::factory()->create([
            'name' => 'a'
        ]);

        $response = $this->getJson(route('authors.index'));
        $response->assertJson([[
            'id' => $author2->id,
        ], [
            'id' => $author->id,
        ]]);
    }
}
