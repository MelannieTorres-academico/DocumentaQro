<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datasheet_funcions extends Model
{
  public function funcions()
  {
      return $this->belongsTo(Funcion::class);
  }

}
