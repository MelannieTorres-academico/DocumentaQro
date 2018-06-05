<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Calendario extends Model
{
  protected $table = 'calendario';
  protected $fillable = ['event_id', 'funcion_id'];

  use searchable;

}
