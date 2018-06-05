<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{


    public function Logout()
    {
          /*  $this->browse(function ($browser) {
            $browser->visit('http://localhost:8000/sysdoq');
            ->type('email', 'root@doq.com')
            ->type('password', 'Doq123')
            ->press('Login')
            ->assertPathIs('/sysdoq')
            ->clickLink('Buscar Peliculas');
        });*/
    }
}
