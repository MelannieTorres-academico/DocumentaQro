<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditarSponsorsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->browse(function (Browser $browser) {
        //   $browser->visit('http://127.0.0.1:8000/sysdoq')
        //           ->type('email', 'root@doq.com')
        //           ->type('password', 'Doq123')
        //           ->press('Iniciar Sesión')
        //           ->clickLink('Administrar Patrocinadores');
        //           //
        //           // //The user imputs all the fields correctly
        //           // ->clickLink('Editar')
        //           // ->type('nombre', 'primer test editar')
        //           // ->type('link', 'www.google.com')
        //           //
        //           // ->attach('poster', '/Users/J/Desktop/Cache/1208094.jpg')
        //           // ->press('Editar')
        //           // ->assertPathIs('/patrocinadores');

      });
    }
}
