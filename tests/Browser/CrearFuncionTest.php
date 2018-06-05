<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CrearFuncionTest extends DuskTestCase
{

    public function testCrearFuncion()
    {

      /*  $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/sysdoq')
                    ->type('email', 'root@doq.com')
                    ->type('password', 'Doq123')
                    ->press('Iniciar Sesión')
                    ->clickLink('Administrar Funciones')

                    //If all the fields are complete a new function is created, then a success message appears and the website is redirected to the control panel
                    ->clickLink('Crear Nueva Función')
                    ->value('#datasheet', '10')
                    ->keys('#start', '03/04/002017', '1212')
                    ->keys('#end','03/04/002017','1215')
                    ->value('#sedes_id', '1')
                    ->press('Crear')
                    ->assertPathIs('/funciones')

                    //If there is an incomplete field a 'missing field' message will appear without start
                    ->clickLink('Crear Nueva Función')
                    ->value('#datasheet', '10')
                    ->keys('#end','03/04/002017','1215')
                    ->value('#sedes_id', '1')
                    ->press('Crear')
                    ->assertPathIs('/funciones/create')

                    //without end
                    ->visit('http://127.0.0.1:8000/funciones')
                    ->clickLink('Crear Nueva Función')
                    ->value('#datasheet', '10')
                    ->keys('#start', '03/04/002017', '1212')
                    ->value('#sedes_id', '1')
                    ->press('Crear')
                    ->assertPathIs('/funciones/create')

                    //El campo sede puede ser ninguno
                    ->visit('http://127.0.0.1:8000/funciones')
                    ->clickLink('Crear Nueva Función')
                    ->value('#datasheet', '10')
                    ->keys('#start', '03/04/002017', '1212')
                    ->keys('#end','03/04/002017','1215')
                    ->press('Crear')
                    ->assertPathIs('/funciones');
        });
*/



    }
}
