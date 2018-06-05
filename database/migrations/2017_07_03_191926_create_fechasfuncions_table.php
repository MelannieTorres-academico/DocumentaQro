<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechasfuncionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fechasfuncions', function (Blueprint $table) {
        $table->increments('id');
        $table->datetime('start');
        $table->datetime('end');
        $table->string('sedes_id');
        $table->integer('id_funcion');

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
      Schema::dropIfExists('fechasfuncions');
    }
}
