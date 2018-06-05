<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteProgramaTest extends DuskTestCase
{

    public function testDeletePrograma()
    {

      /*------------------------------------------------------------------
      | NOTA: para realizar este testing la tabla programas               |
      | NO DEBE CONTENER ningun registro que contenga el string "Mi Docu" |
      -------------------------------------------------------------------

        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/sysdoq')
                    ->type('email', 'root@doq.com')
                    ->type('password', 'Doq123')
                    ->press('Iniciar Sesión')
                    ->clickLink('Administrar Programas')

                    //If the admin confirms the 'Are you sure you want to delete 'program' message, the program is deleted.
                    ->press('Eliminar')
                    ->whenAvailable('.showSweetAlert', function ($modal) {
                          $modal->assertSee('Estás seguro')
                          ->pause(5000)
                          ->press('Sí, elimínalo!');
                    })
                    ->assertSee('Item deleted successfully')
                    ->assertDontSee('Mi Docu 2')


                    //If the admin denies the 'Are you sure you want to delete 'program' message, a '' 'program' was not deleted" message appears.
                    ->press('Eliminar')
                    ->whenAvailable('.showSweetAlert', function ($modal) {
                          $modal->assertSee('Estás seguro')
                          ->pause(5000)
                          ->press('Cancelar');
                    })
                    ->assertSee('Mi Docu')

                    //Limpiar para la siguiente prueba
                    ->press('Eliminar')
                    ->whenAvailable('.showSweetAlert', function ($modal) {
                          $modal->assertSee('Estás seguro')
                          ->pause(5000)
                          ->press('Sí, elimínalo!');
                    })
                    ->assertSee('Item deleted successfully')
                    ->assertDontSee('Mi Docu');

        });*/

    }
}
