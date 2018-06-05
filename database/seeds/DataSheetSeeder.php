<?php



use Illuminate\Database\Seeder;

class DataSheetSeeder extends Seeder{

    public function run()
    {
    	$faker = Faker\Factory::create();

    	foreach (range(1,100) as $index) {

	        DB::table('datasheets')->insert([

	            'titulo' => $faker->sentence(8),
	            'director' => $faker->lastName,
	            'pais' => $faker->country,
	            'anio' => $faker->numberBetween(1950,2017),
	            'duracion' => $faker->numberBetween(45,150),
	            'costo' => $faker->numberBetween(50,2000),
	            'moneda' => $faker->randomElement(array('Peso','Dollar','Libra')),
	            'sinopsis' => $faker->paragraph(2),
	            'subtitulos' => $faker->randomElement(array('Si','No')),
	            'status' => $faker->randomElement(array('Disponible','Cancelado','En Proceso','No Disponible')),
	            'trailer' => $faker->sentence(8),
	            'stills1' => $faker->sentence(8),
	            'stills2' => $faker->sentence(8),
	            'stills3' => $faker->sentence(8),
	            'poster' => $faker->sentence(2),
	            'programa' => $faker->randomElement(array('Docs&Tonics','DocuMediaNoche','FestivalOctubre')),
	            'programa_id' => $faker->numberBetween(1,3)
	        ]);
        }

    }

}
