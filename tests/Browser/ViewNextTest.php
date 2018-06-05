<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewNextTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
      $this->browse(function (Browser $browser) {
            //  $browser->visit('http://127.0.0.1:8000/')
            //          ->click('#a')
             //
             //
            //          ->visit('http://127.0.0.1:8000/')
            //          ->click('#b')
             //
             //
            //          ->visit('http://127.0.0.1:8000/')
            //          ->click('#c');

         });
    }
}
