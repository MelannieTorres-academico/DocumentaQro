<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{

  /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testExample()
    {
             $this->browse(function ($browser) {
            $browser->visit('http://localhost:8000/sysdoq');
            /*
            ->type('email', 'root@doq.com')
            ->type('password', 'Doq123')
            ->press('Login')
            ->clickLink('root')
            ->clickLink('Logout')
            ->assertPathIs('/');
            */
        });
    }
}