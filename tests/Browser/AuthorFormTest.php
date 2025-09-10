<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthorFormTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCanCreateAuthorThroughForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Aucun auteur trouvé')
                ->type('name', 'Masashi Kishimoto')
                ->type('year_of_birth', '1974')
                ->type('biography', 'Mangaka, auteur de Naruto')
                ->press('Créer')
                ->waitForText('Auteur créé avec succès !')
                ->assertSee('Auteur créé avec succès !')
                ->assertSee('Masashi Kishimoto')
                ->assertDontSee('Aucun auteur trouvé');
        });

        $this->assertDatabaseHas('authors', [
            'name' => 'Masashi Kishimoto',
            'year_of_birth' => 1974,
            'biography' => 'Mangaka, auteur de Naruto'
        ]);
    }

    public function testFormValidationErrors()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->press('Créer')
                ->waitForText('The name field is required')
                ->assertSee('The name field is required')
                ->assertSee('The year of birth field is required');
        });

        $this->assertDatabaseCount('authors', 0);
    }
}
