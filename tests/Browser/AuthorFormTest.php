<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;

class AuthorFormTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCanCreateAuthorThroughForm()
    {
        // TODO 11 : Ecrire un test pour vérifier que le formulaire créé bien un auteur (chercher avec $this->browse dans la librairie DuskTestCase)
    }

    public function testFormValidationErrors()
    {
        // TODO 12 : Ecrire un test pour vérifier que le formulaire affiche des erreurs s’il y en a (Vous pouvez utiliser $this->browse ici aussi)
    }
}
