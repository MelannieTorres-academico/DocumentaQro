<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sedes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->text('info');
          $table->text('direccion');
          $table->double('latitud', 15, 8);
          $table->double('longitud', 15, 8);
          $table->string('link');
          $table->text('poster');
          $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('sedes');
    }
}
