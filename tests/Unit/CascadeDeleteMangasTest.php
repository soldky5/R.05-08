<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CascadeDeleteMangasTest extends TestCase
{
    use RefreshDatabase;

    public function test_manga_cascade_delete(): void
    {
        // TODO 8 : Tester la suppression en cascade des mangas liés à un auteur
        $this->assertTrue(true);
    }
}
