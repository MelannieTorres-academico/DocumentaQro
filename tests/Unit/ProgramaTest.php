<?php

namespace Tests\Unit;

use App\Programa;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;

class ProgramaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     /** @test */
    public function ruta_correcta()
    {
       $response = $this->get('/programas/create');

       $response->assertStatus(200);
    }

    /** @test */
    public function programa_tiene_nombre()
    {
        $programa = new Programa (['titulo'=>'DoQu']);
        $this->assertEquals('DoQu', $programa->titulo);
    }

    /** @test */
  public function programa_tiene_imagen()
   {
     $programa = factory(Programa::class)->create();
     //consultar numero de regstros

  //   $this->assertStatus(200);

  //   $programa->assertResponseOk();


   }
}
