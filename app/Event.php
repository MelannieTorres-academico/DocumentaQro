<?php

namespace App;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['title', 'color', 'lugar'];

  /*  public function programa()
    {
        return $this->belongsTo(Programa::class);
    }*/


    public function getStartAttribute($date){
      return new Date($date);
    }

    public function fechas()
  		{
  				return $this->hasMany(fechasEventos::class);
  		}


}
