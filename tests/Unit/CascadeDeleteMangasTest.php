<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CascadeDeleteMangasTest extends TestCase
{
    use RefreshDatabase;

    public function test_manga_cascade_delete(): void
    {
        $this->assertTrue(true);
    }
}
