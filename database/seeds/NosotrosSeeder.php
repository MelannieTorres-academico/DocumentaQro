<?php

use Illuminate\Database\Seeder;
use App\Nosotros;

class NosotrosSeeder extends Seeder{

    public function run()
    {
      $faker = Faker\Factory::create();

         $nosotros = [
           [

               'banner' => $faker->image(storage_path('../public/uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),

               'titulo1' => '#HistoriasQueTransforman',

               'parrafo1' => 'Documental en Querétaro es una asociación civil que abre

                              espacios de exhibición para el documental y promueve su

                              producción, para con ello ofrecer a la comunidad la posibilidad de

                              entrar en contacto con largometrajes y cortometrajes de México y

                              el mundo, que muestran un poco de la realidad vista a través de los

                              ojos del realizador.',


                'titulo2' => 'Nuestra Razón de Ser',

                'parrafo2' => 'Compartir diferentes realidades para

                              ampliar nuestra visión del mundo a través

                              del cine documental.',

                'titulo3' => 'Nuestra Visión',

                'parrafo3' => 'Ser un organismo autónomo que vincule de forma

                              integral la producción, distribución y exhibición de

                              cine documental en Querétaro.',

                'titulo4' => 'Otro parrafo',

                'parrafo4' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                Etiam ultricies nisi vel augue.',

                'imagen_intermedia' => $faker->image(storage_path('../public/uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),

                'ultima_imagen' => $faker->image(storage_path('../public/uploads'), $width=100, $height=100, 'cats', true, true, 'Faker'),


           ]


        ];

        foreach ($nosotros as $key => $value) {
            Nosotros::create($value);
        }
    }

}
