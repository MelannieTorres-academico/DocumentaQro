<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{

  /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testExample()
    {

     /*      $this->browse(function ($browser) {
            $browser->visit('http://localhost:8000/sysdoq');
            ->type('email', 'root@doq.com')
            ->type('password', 'Doq123')
            ->press('Login')
            //Login Super Administrador 
            ->assertPathIs('/sysdoq')
            ->assertSee('Editar Cuenta Super Usuario')
            Logout Super Administrador 
            ->clickLink('root')
            ->clickLink('Logout')
            ->assertPathIs('/')
            //Login Administrador 
            ->visit('http://localhost:8000/sysdoq')
            ->type('email', 'vampiro@doq.com')
            ->type('password', 'Doq123')
            ->press('Login')
            ->assertDontSee('Editar Cuenta Super Usuario');
   

        }); */
    }
}
