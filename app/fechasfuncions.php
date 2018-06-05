<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fechasfuncions extends Model
{
  protected $table = 'fechasfuncions';

  public function funcions()
  {
      return $this->belongsTo(Funcion::class);
  }

  public function sede()
  {
      return $this->belongsTo(Sedes::class);
  }
}
