<?php

use Tests\Browser;
use App\Nosotros;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class mainMenuNosotrosTest extends DuskTestCase
{

    public function testMainMenuNosotros()
    {

        // $nosotros=Nosotros::find(1);
        //
        //
        //
        // $this->browse(function ($browser) use ($nosotros) {
        //
        //   $browser
        //           //If the user goes to /nosotros he can see more about documenta
        //           ->visit('http://127.0.0.1:8000/nosotros/')
        //           ->assertSee($nosotros->titulo1)
        //           ->assertSee($nosotros->titulo2)
        //           ->assertSee($nosotros->titulo3)
        //           ->assertSee($nosotros->titulo4);
        //
        //
        //
        // });
    }
}
