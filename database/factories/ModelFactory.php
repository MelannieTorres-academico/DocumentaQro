<?php
use Faker\Provider\DateTime;
use Faker\Provider\en_US\Address;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Programa::class, function (Faker\Generator $faker) {
  $dir='/testing_uploads';

    return [
        'titulo' => $faker->title,
        'poster' => $faker->image(storage_path('testing_uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),
        'descripcion' => $faker->text
    ];
});



$factory->define(App\Datasheet::class, function (Faker\Generator $faker) {
  $dir='/testing_uploads';

    return [
        'titulo' => $faker->title,
        'poster' => $faker->image(storage_path('testing_uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),
        'director' => $faker->lastName,
        'pais' => $faker->country,
        'anio'=>$faker->year($max = 'now'),
        'duracion'=>$faker->numberBetween($min = 30, $max = 120),
        'subtitulos'=>'Si',
        'trailer'=>'https://www.youtube.com/watch?v=YJE8b4xOPRY',
        'costo'=>$faker->numberBetween($min = 30, $max = 120),
        'moneda'=>'Pesos',
        'sinopsis'=>$faker->paragraph(5),
        'status'=>'Disponible',
        'stills' => $faker->image(storage_path('testing_uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),
        'programa'=>'DoQu',
        'programa_id'=>4


    ];
});


$factory->define(App\Event::class, function (Faker\Generator $faker) {

    return [


      'title' => $faker->title,
      'poster' => $faker->image(storage_path('testing_uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),
      'programa_id'=>4,
      'sedes_id'=>4,
      'datasheet_id'=>1,
      'descripcion'=>$faker->paragraph(1),
      'link'=>'https://www.youtube.com/watch?v=-eSdCyWGyEU&t=2s',
      'color'=>'#000000',
      'start'=>$faker->datetime(),
      'end'=>$faker->datetime(),

    ];
});
