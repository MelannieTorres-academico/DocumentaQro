<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{

  public function dia($date)
  {
  //  2017-08-01 12:44:39
      $dia=substr($date, 8, 2 )
      return $dia;
  }

  // public function mes($date)
  // {
  //     return $this->belongsTo(Sedes::class);
  // }
  //
  // public function hora_inicio($date)
  // {
  //     return $this->belongsTo(Sedes::class);
  // }
  //
  // public function hora_fin($date)
  // {
  //     return $this->belongsTo(Sedes::class);
  // }
}
