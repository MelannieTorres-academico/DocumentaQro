<?php



use Illuminate\Database\Seeder;

class EventSeeder extends Seeder{

    public function run()
    {
    	$faker = Faker\Factory::create();


        foreach (range(1,10) as $index) {

          DB::table('events')->insert([
            'title' => $faker->sentence(4),
            'color' => $faker->hexColor,
            'descripcion' => $faker->sentence(4),
            'link' => 'https://www.youtube.com/watch?v=qVYzDDF_8uw',
            'poster' => $faker->sentence(4),
          ]);
        }

    }
}
