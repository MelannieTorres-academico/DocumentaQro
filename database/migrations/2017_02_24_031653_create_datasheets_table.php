<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('director');
            $table->string('pais');
            $table->integer('anio');
            $table->integer('duracion');
            $table->string('subtitulos');
            $table->string('trailer');
            $table->integer('costo');
            $table->string('moneda');
            $table->text('sinopsis');
            $table->string('status');

            $table->string('stills1')->nullable();
            $table->string('stills2')->nullable();
            $table->string('stills3')->nullable();
            $table->string('poster');
            $table->string('programa');
            $table->integer('programa_id');
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
        Schema::dropIfExists('datasheets');
    }
}
