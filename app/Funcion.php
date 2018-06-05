<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{

	protected $table = 'funcions';

	public function datasheets(){

		return $this->belongsToMany(Datasheet::class);
	}

	public function programas(){

		return $this->belongsTo(Programa::class);
	}

	public function fechas()
		{
				return $this->hasMany(fechasfuncions::class);
		}
    
}
