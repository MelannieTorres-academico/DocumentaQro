<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EliminarSedeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testEliminarSede()
    {
      // $this->browse(function (Browser $browser) {
      //     $browser->visit('http://localhost:8000/sysdoq')
      //
      //     ->type('email', 'root@doq.com')
      //     ->type('password', 'Doq123')
      //     ->press('Login')
      //     ->clickLink('Administrar Sede')
      //     ->assertPathIs('/sliderAdmin')
      //     ->press('Eliminar')
      //     ->assertPathIs('/sedesAdmin')
      //     ->assertDontSee('TestCase')
      //     ->assertPathIs('/sedesAdmin')
      //     ->assertDontSee('asdf');
      //    });
    }
}
