<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Programa extends Model
{

    protected $table = 'programas';
    protected $fillable = ['titulo', 'poster', 'descripcion'];

    use searchable;

    public function funcion(){

    	return $this->hasMany(Funcion::class);
    }

    public function datasheet(){

    	return $this->hasMany(Datasheet::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

}
