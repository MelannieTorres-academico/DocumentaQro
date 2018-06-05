<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $Role = [
            [
                'name' => 'super-admin',
                'display_name' => 'Administar el superusuario',
                'description' => 'modificar super usuario'
            ],
        	[
        		'name' => 'super-user',
        		'display_name' => 'Super Usuario',
        		'description' => 'Acesso a todo el panel'
        	],
        	
        	
        ];

        foreach ($Role as $key => $value) {
        	Role::create($value);
        }
    }
}
