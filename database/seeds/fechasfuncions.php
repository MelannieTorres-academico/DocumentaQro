<?php

use Illuminate\Database\Seeder;

class fechasfuncions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $faker = Faker\Factory::create();

      foreach (range(1,10) as $index) {

          DB::table('fechasfuncions')->insert([
            'start' => $faker->dateTimeThisMonth(),
            'end' => $faker->dateTimeThisMonth(),
            'id_funcion'=> $faker->numberBetween(1, 10),
            'sedes_id'=> $faker->numberBetween(1, 10),

          ]);
        }



    }
}
