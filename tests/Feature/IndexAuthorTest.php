<?php

namespace Tests\Feature;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexAuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_author(): void
    {
        // TODO 1 : Écrire le test pour tester que la route qui liste les auteurs fonctionne
        $this->assertTrue(true);
    }
    
    public function test_list_author_with_specific_name(): void
    {
        // TODO 3 : Tester le filtre sur le nom de l'auteur
        $this->assertTrue(true);
    }
    
    public function test_list_author_with_those_mangas(): void
    {
        // TODO 5 : Tester que la route renvoie bien la liste des mangas des auteurs (les bons mangas doivent être liés aux bons auteurs)
        $this->assertTrue(true);
    }
    
    public function test_list_author_with_sort(): void
    {
        // TODO 7 : Tester le tri
        $this->assertTrue(true);
    }
}
