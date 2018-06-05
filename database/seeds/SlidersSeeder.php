<?php

use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

        foreach (range(1,4) as $index) {

          DB::table('sliders')->insert([
            'titulo' => $faker->name,
            'subtitulo'=> $faker->sentence(8),
            'link' => 'https://www.reddit.com',
            'poster' => $faker->image(public_path('../public/uploads'), $width=776, $height=440, 'cats', true, true, 'Faker')

          ]);
        }
    }
}
