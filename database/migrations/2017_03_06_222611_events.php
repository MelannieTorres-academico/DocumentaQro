<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    Schema::create('events', function (Blueprint $table) {
      $table->increments('id')->unique;
      $table->string('title');
      $table->string('color', 7);
      $table->string('poster');
      $table->string('link');
      $table->string('descripcion');
  //    $table->string('datasheet_id');
  //    $table->string('programa_id');
  //    $table->string('sedes_id');
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
      Schema::dropIfExists('events');
    }
}
