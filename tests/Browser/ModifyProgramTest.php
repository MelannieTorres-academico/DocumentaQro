<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ModifyProgramTest extends DuskTestCase
{

    public function testModificarPrograma()
    {

      /*  $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/sysdoq')
                    ->type('email', 'root@doq.com')
                    ->type('password', 'Doq123')
                    ->press('Iniciar Sesión')
                    ->clickLink('Administrar Programas')

                    //If all the fields are complete the program is modified, then a success message appears (input .jpg)
                    ->clickLink('Editar')
                    ->type('titulo', 'Docs and Tonic')
                    ->attach('poster', '/Users/melannie/Desktop/url.jpg')
                    ->type('descripcion', 'Esta es una descripcion de Docs and Tonic')
                    ->press('Guardar')
                    ->assertPathIs('/programas')
                    ->clickLink('Ver')
                    ->assertSee('Docs and Tonic')

                    //If all the fields are complete the program is modified, then a success message appears (input .png)
                    ->visit('http://127.0.0.1:8000/programas')
                    ->clickLink('Editar')
                    ->type('titulo', 'Docs & Tonic')
                    ->attach('poster', '/Users/melannie/Desktop/imgres-1.png')
                    ->type('descripcion', 'Esta es una descripcion de Docs and Tonic')
                    ->press('Guardar')
                    ->assertPathIs('/programas')
                    ->clickLink('Ver')
                    ->assertSee('Docs & Tonic')

                    //If there is an incomplete field a 'missing field' message will appear. (description missing)
                    ->visit('http://127.0.0.1:8000/programas')
                    ->clickLink('Editar')
                    ->clear('descripcion')
                    ->press('Guardar')
                    ->assertPathIsNot('/programas')

                    //If there is an incomplete field a 'missing field' message will appear. (title missing)
                    ->visit('http://127.0.0.1:8000/programas')
                    ->clickLink('Editar')
                    ->clear('titulo')
                    ->press('Guardar')
                    ->assertPathIsNot('/programas')


                    //If the image is greater than 720 pixels send an error and do not upload the image
                    ->visit('http://127.0.0.1:8000/programas')
                    ->clickLink('Editar')
                    ->type('titulo', 'DocuDeMedianoche')
                    ->type('descripcion', 'Esta es una descripcion del DocuDeMedianoche2')
                    ->attach('poster', '/Users/melannie/Desktop/launch.png')
                    ->press('Guardar')
                    ->assertSee('El campo poster debe ser menor que o equivalente a 1000 pixeles de ancho y menor que o equivalente a 1000 pixeles de alto.')
                    ->assertPathIsNot('/programas');


        });*/



    }
}
