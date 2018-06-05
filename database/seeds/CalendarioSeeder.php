<?php

use Illuminate\Database\Seeder;
use App\Calendario;

class CalendarioSeeder extends Seeder{

    public function run()
    {
      $faker = Faker\Factory::create();

         $calendario = [
           [
               'event_id' => '0',
               'funcion_id' => '1',
               'title' => 'Mi evento',
               'start' => '2017-08-16 10:34:00',
           ],
           [
             'event_id' => '1',
             'funcion_id' => '0',
             'title' => 'Mi evento 2',
             'start' => '2017-08-16 10:34:00',


           ],
          [
            'event_id' => '0',
            'funcion_id' => '2',
            'title' => 'Mi evento 3',
            'start' => '2017-08-16 10:34:00',


            ],
             [
               'event_id' => '2',
               'funcion_id' => '0',
               'title' => 'Mi evento 4',
               'start' => '2017-08-16 10:34:00',


            ],[
              'event_id' => '0',
              'funcion_id' => '3',
              'title' => 'Mi evento 5',
              'start' => '2017-08-16 10:34:00',


            ]


        ];

        foreach ($calendario as $key => $value) {
            Calendario::create($value);
        }
    }

}
