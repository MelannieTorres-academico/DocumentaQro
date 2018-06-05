<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{

    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('poster');
            $table->text('descripcion');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('programas');
    }
}
