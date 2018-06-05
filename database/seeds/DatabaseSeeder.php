<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $this->call(datasheet_funcion::class);
      $this->call(DataSheetSeeder::class);
      $this->call(EventSeeder::class);
      $this->call(fechaseventos::class);
      $this->call(fechasfuncions::class);
      $this->call(FuncionSeeder::class);
      $this->call(NosotrosSeeder::class);
      $this->call(PatrocinadoresSeeder::class);
      $this->call(PermissionSeeder::class);
      $this->call(ProgramaSeeder::class);
      $this->call(RoleSeeder::class);
      $this->call(RolePermission::class);

      //$this->call(SedesSeeder::class);
      $this->call(SlidersSeeder::class);

       //$this->call(CalendarioSeeder::class);




    }
}
