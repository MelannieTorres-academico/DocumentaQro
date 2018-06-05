<?php

use Illuminate\Database\Seeder;

class PatrocinadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

        foreach (range(1,20) as $index) {

          DB::table('patrocinadores')->insert([
            'nombre' => $faker->name,
            'link' => 'https://www.reddit.com',
            'categoria' => $faker->numberBetween(1,3),
            'poster' => $faker->image(public_path('uploads'), $width=200, $height=100, 'cats', true, true, 'Faker')

          ]);
        }
    }
}
