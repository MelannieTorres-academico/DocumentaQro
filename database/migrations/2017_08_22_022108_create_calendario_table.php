<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('calendario', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('event_id');
        $table->integer('sedes_id');
        $table->string('color', 7);
        $table->integer('programa_id');
        $table->integer('funcion_id');
        $table->string('title');
        $table->datetime('start');
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
      Schema::dropIfExists('calendario');
    }
}
