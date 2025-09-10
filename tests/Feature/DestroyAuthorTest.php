<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DestroyAuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_destroy_author(): void
    {
        // TODO 2 : Étape RED, écrire un test pour vérifier que la suppression renvoie bien une 204 (HTTP: no content)
    }
    // TODO 4 : Étape REFACTOR, ajouter un test pour vérifier que l'auteur a bien été supprimé de la BDD
}
