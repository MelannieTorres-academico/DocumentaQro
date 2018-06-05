<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Datasheet extends Model
{

	use searchable;

	protected $table = 'datasheets';

	public $fillable = ['titulo','director','pais','anio','duracion','subtitulos','trailer','costo','moneda','sinopsis','status','stills1','stills2','stills3','poster','programa','programa_i'];


    public function funciones(){
			return $this->belongsToMany(Funcion::class);
		}

	 public function programas(){
		return $this->belongsTo(Programa::class);
	 }
}
