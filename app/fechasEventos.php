<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fechasEventos extends Model
{
  protected $table = 'fechas_eventos';
  protected $fillable = ['start', 'end', 'id_evento'];

  public function funcions()
  {
      return $this->belongsTo(Event::class);
  }

  public function sede()
  {
      return $this->belongsTo(Sedes::class);
  }
}
