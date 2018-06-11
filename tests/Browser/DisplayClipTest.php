<?php
// 
// use Tests\Browser;
//
// use App\Datasheet;
// use Tests\DuskTestCase;
// use Laravel\Dusk\Chrome;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
//
// class DisplayClipTest extends DuskTestCase
// {
//
//     public function testDisplayClip()
//     {
//         // $datasheet_youtube_1 = factory(Datasheet::class)->create([
//         //     'trailer' => 'https://www.youtube.com/embed/47dtFZ8CFo8'
//         // ]);
//         //
//         // $datasheet_youtube_2 = factory(Datasheet::class)->create([
//         //     'trailer' => 'https://www.youtube.com/watch?v=owIj5_PEc4c'
//         // ]);
//         //
//         // $datasheet_imdb_1 = factory(Datasheet::class)->create([
//         //     'trailer' => 'http://www.imdb.com/videoembed/vi128891161'
//         // ]);
//         //
//         // $datasheet_imdb_2 = factory(Datasheet::class)->create([
//         //     'trailer' => 'http://www.imdb.com/list/ls053181649/videoplayer/vi128891161?ref_=hm_hp_i_2'
//         // ]);
//         //
//         //
//         // $datasheet_imdb_3 = factory(Datasheet::class)->create([
//         //     'trailer' => 'http://www.imdb.com/list/ls053181649/videoplayer/vi128891161'
//         // ]);
//         //
//         // $datasheet_vimeo_1 = factory(Datasheet::class)->create([
//         //     'trailer' => 'https://vimeo.com/214947122'
//         // ]);
//         //
//         // $datasheet_vimeo_2 = factory(Datasheet::class)->create([
//         //     'trailer' => 'https://player.vimeo.com/video/214947122?color=dfdfdf&title=0&byline=0&portrait=0&badge=0'
//         // ]);
//         //
//         // $datasheet_invalid = factory(Datasheet::class)->create([
//         //     'trailer' => 'https://google.com'
//         // ]);
//         //
//         //
//         // $this->browse(function ($browser) use ($datasheet_youtube_1, $datasheet_youtube_2, $datasheet_imdb_1, $datasheet_imdb_2, $datasheet_imdb_3, $datasheet_vimeo_1, $datasheet_vimeo_2, $datasheet_invalid ) {
//         //   $browser->visit('http://127.0.0.1:8000/sysdoq')
//         //           ->type('email', 'root@doq.com')
//         //           ->type('password', 'Doq123')
//         //           ->press('Iniciar Sesión')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_youtube_1->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_youtube_2->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_imdb_1->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_imdb_2->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_imdb_3->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_vimeo_1->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_vimeo_2->id)
//         //           ->pause(1000)
//         //           ->assertDontSee('Video no encontrado')
//         //
//         //           ->visit('http://127.0.0.1:8000/datasheet/'.$datasheet_invalid->id)
//         //           ->pause(1000)
//         //           ->assertSee('Video no encontrado');
//
//       //  });
//     }
// }
