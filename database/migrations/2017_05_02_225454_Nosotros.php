<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nosotros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('nosotros', function (Blueprint $table) {
        $table->increments('id');
        $table->text('banner');
        $table->string('titulo1');
        $table->text('parrafo1');
        $table->string('titulo2');
        $table->text('parrafo2');
        $table->string('titulo3');
        $table->text('parrafo3');
        $table->string('titulo4');
        $table->text('parrafo4');
        $table->text('imagen_intermedia');
        $table->text('ultima_imagen');
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
      Schema::dropIfExists('nosotros');
     }
}
