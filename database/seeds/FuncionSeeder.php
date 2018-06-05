<?php



use Illuminate\Database\Seeder;

class FuncionSeeder extends Seeder{

    public function run()
    {
    	$faker = Faker\Factory::create();

    	foreach (range(1,10) as $index) {

	        DB::table('funcions')->insert([
              'color' => $faker->hexColor,

	        ]);
        }

    }


}
