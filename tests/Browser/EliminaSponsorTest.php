<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EliminaSponsorTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
      $this->browse(function (Browser $browser) {
          $browser->visit('http://localhost:8000/sysdoq');

          // ->type('email', 'root@doq.com')
          // ->type('password', 'Doq123')
          // ->press('Iniciar Sesión')
          // ->clickLink('Administrar Patrocinadores')
          // ->assertPathIs('/patrocinadores')
          // ->press('Eliminar')
          // ->assertPathIs('/patrocinadores')
          // ->assertDontSee('TestCase')
          // ->assertPathIs('/patrocinadores')
          // ->assertDontSee('asdf');
         });
    }
}
