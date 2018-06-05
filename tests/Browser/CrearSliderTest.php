<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CrearSliderTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCrearSlider()
     {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('http://127.0.0.1:8000/sysdoq')
    //                 //sysAdmin Login
    //                 ->type('email', 'root@doq.com')
    //                 ->type('password', 'Doq123')
    //                 ->press('Login')
    //                 ->clickLink('Administrar Slider')
    //                 //
    //                 ->clickLink('Crear nuevo item')
    //                 ->type('titulo', 'TestCase')
    //                 ->type('subtitulo', 'SubtituloTest')
    //                 ->type('link', 'https://www.reddit.com')
    //                 ->attach('poster', '//Users/J/Desktop/Cache/test.jpg')
    //                 ->press('Crear')
    //                 ->assertDontSee('El campo foto debe ser menor que o equivalente a 1000 pixeles de ancho y menor que o equivalente a 1000 pixeles de alto.')
    //                 ->assertPathIs('/sliderAdmin')
    //
    //
    //                 // missing titulo
    //                 ->clickLink('Crear nuevo item')
    //                 ->type('titulo', 'Not catedral')
    //                 ->press('Crear')
    //                 ->assertPathIs('/slider/create')
    //                 //missing info
    //                 ->type('subtitulo', 'Not catedral')
    //                 ->press('Crear')
    //                 ->assertPathIs('/slider/create')
    //
    //                 ->type('link', 'Not catedral')
    //                 ->press('Crear')
    //                 ->assertPathIs('/slider/create');
    //                 //image is not biger than
    //
    //
    //
    //
    //     });
    }
}
