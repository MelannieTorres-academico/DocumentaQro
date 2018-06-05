<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MostrarRolTest extends DuskTestCase
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
            /*
            ->type('email', 'root@doq.com')
            ->type('password', 'Doq123')
            ->press('Login')
            ->clickLink('Administrar Roles')
            ->assertSee('Yolo')
            ->clickLink('Mostrar')
            ->assertPathIs('/roles/5')
            ->assertSee('Yolo')
            ->clickLink('Atrás')
            ->assertPathIs('/roles')
            ->assertSee('Yolo');
            */
        });
    }
}
