<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $permission = [
            [
                'name' => 'super_admin',
                'display_name' => 'Administar el superusuario',
                'description' => 'modificar super usuario'
            ],
        	[
        		'name' => 'admin-users',
        		'display_name' => 'Administrar Usuarios',
        		'description' => 'crear modificar y eliminar Usuarios'
        	],
            [
                'name' => 'find-datasheet',
                'display_name' => 'Buscar Peliculas',
                'description' => 'Puede entrar a la sección de filtros de peliculas'
            ],
        	[
        		'name' => 'admin-roles',
        		'display_name' => 'Administrar Roles',
        		'description' => 'crear modificar y eliminar Roles'
        	],
        	[
        		'name' => 'admin-datasheets',
        		'display_name' => 'Administrar Fichas Técnicas',
        		'description' => 'crear modificar y eliminar fichas Técnicas'
        	],
        	[
        		'name' => 'admin-events',
        		'display_name' => 'Administrar Eventos y Funciones',
        		'description' => 'crear modificar y eliminar eventos'
        	],
        	[
        		'name' => 'admin-sponsors',
        		'display_name' => 'Administrar Patrocinadores',
        		'description' => 'crear modificar y eliminar patrocinadores'
        	],
        	[
        		'name' => 'admin-sede',
        		'display_name' => 'Administrar Sede',
        		'description' => 'crear modificar y eliminar sedes'
        	],
        	[
        		'name' => 'admin-slider',
        		'display_name' => 'Administrar Slider',
        		'description' => 'administrar el slider de la página principal'
        	],
            [
                'name' => 'admin-programas',
                'display_name' => 'Administrar Programas',
                'description' => 'crear modificar y eliminar programas'
            ],


        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
