<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MainmenuProgramaTest extends DuskTestCase
{

    public function testMainMenuPrograma()
    {
        /*$this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')

            //If the user clicks on the menu Programa and then the name of the program he wants,
            //he is redirected to the page where its info appears DoQu

                    ->click('#programas')
                    ->click('#DoQu')
                    ->assertSee('DoQu')
                    ->assertPathIs('/programa/DoQu')

                    //If the user clicks on the menu Programa and then the name of the program he wants,
                    //he is redirected to the page where its info appears docudemedianoche
                    ->click('#programas')
                     ->click('#docudemedianoche')
                     ->assertSee('docudemedianoche')
                     ->assertPathIs('/programa/docudemedianoche')

                     //If the user clicks on the menu Programa and then the name of the program he wants,
                     //he is redirected to the page where its info appears Docs&Tonic
                     ->click('#programas')
                     ->click('#DocsandTonic')
                     ->assertSee('Docs&Tonic')
                     ->assertPathIs('/programa/Docs&Tonic')

                     //If the user clicks on the menu Programa and then the name of the program he wants,
                     //he is redirected to the page where its info appears Rhythm&Docs
                     ->click('#programas')
                     ->click('#RhythmandDocs')
                     ->assertSee('Rhythm&Docs')
                     ->assertPathIs('/programa/Rhythm&Docs')
                     //If the user writes a similar but invalid link, it sends a 404: not found
                     ->visit('http://127.0.0.1:8000/programa/DoQus')
                     ->assertSee('Not Found')

                    //If the user writes a similar but invalid link, it sends a 404: not found
                    ->visit('http://127.0.0.1:8000/programa/ninguno')
                    ->assertSee('Not Found');


        });
*/


    }
}
