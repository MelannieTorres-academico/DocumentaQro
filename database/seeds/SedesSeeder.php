<?php



use Illuminate\Database\Seeder;

class SedesSeeder extends Seeder{

    public function run()
    {
    	$faker = Faker\Factory::create();

        foreach (range(1,3) as $index) {

          DB::table('sedes')->insert([
            'nombre' => $faker->name,
            'info'=> $faker->sentence(8),
            'direccion' => $faker->sentence(4),
            'coordenadas' => $faker->randomDigitNotNull(8),
            'link' => $faker->sentence(4),
            'poster' => $faker->image(public_path('../public/uploads'), $width=255, $height=255, 'cats', true, true, 'Faker')

          ]);
        }
    }
}
