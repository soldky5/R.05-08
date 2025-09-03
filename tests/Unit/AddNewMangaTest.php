<?php

namespace Tests\Feature;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddNewMangaTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_new_manga(): void
    {
        $author = Author::factory()->create();
        $manga = [
            'title' => 'test',
            'start_year' => date('Y'),
            'volume_number' => 2
        ];
        $author->addManga($manga);
        $this->assertDatabaseHas('mangas', ['title' => 'test']);
    }
}
