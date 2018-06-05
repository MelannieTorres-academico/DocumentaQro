<?php

use Illuminate\Database\Seeder;

class datasheet_funcion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker\Factory::create();

      foreach (range(1,2) as $index) {

          DB::table('datasheet_funcions')->insert([
            'datasheet_id'=> $faker->numberBetween(1, 10),
            'funcion_id'=> $faker->numberBetween(1, 10),
          ]);
        }

    }
}
