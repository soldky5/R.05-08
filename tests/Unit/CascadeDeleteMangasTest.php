<?php

namespace Tests\Unit;

use App\Models\Author;
use App\Models\Manga;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CascadeDeleteMangasTest extends TestCase
{
    use RefreshDatabase;

    public function test_manga_cascade_delete(): void
    {
        // TODO 8 : Correction
        $author = Author::factory()->create();
        $manga = Manga::factory()->create([
            'author_id' => $author->id
        ]);
        $this->assertDatabaseHas($manga->getTable(), ['id' => $manga->id]);
        $author->delete();
        $this->assertDatabaseMissing($manga->getTable(), ['id' => $manga->id]);
    }
}
