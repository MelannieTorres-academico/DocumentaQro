<?php

use Tests\Browser;

use App\Datasheet;
use App\Event;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SeeFunctionTest extends DuskTestCase
{

    public function testDisplayClip()
    {
      /*  $function = factory(Event::class)->create([
            'datasheet_id' => 1
        ]);
        $datasheet=Datasheet::find(1);



        $this->browse(function ($browser) use ($function, $datasheet ) {
          $next=$function->id+1;

          $browser
                  //If the user access a function, he can see the details
                  ->visit('http://127.0.0.1:8000/eventos/'.$function->id)
                  ->pause(3000)
                  ->assertSee($datasheet->titulo)

                  //If the user access link similar to the function's one and it doesn't exist, a 404 page appears
                  ->visit('http://127.0.0.1:8000/eventos/'.$next)
                  ->assertSee('Not Found');

        });*/
    }
}
