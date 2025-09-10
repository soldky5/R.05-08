<?php

namespace Tests\Feature;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DestroyAuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_destroy_author(): void
    {
        // TODO 2 : Correction
        $author = Author::factory()->create();

        $response = $this->deleteJson(route('authors.destroy', ['author' => $author]));
        $response->assertNoContent();
    }

    // TODO 4 : Correction
    public function test_destroy_author_works(): void
    {
        $author = Author::factory()->create();

        $this->assertDatabaseHas($author->getTable(), ['id' => $author->id]);
        $this->deleteJson(route('authors.destroy', ['author' => $author]));
        $this->assertDatabaseMissing($author->getTable(), ['id' => $author->id]);
    }
}
