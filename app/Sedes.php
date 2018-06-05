<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sedes extends Model
{

  protected $table = 'sedes';

  protected $fillable = ['nombre', 'info', 'direccion', 'coordenadas', 'link', 'poster'];

  public function fechasEventos()
    {
        return $this->hasMany(fechasEventos::class);
    }

    public function fechasfuncions()
      {
          return $this->hasMany(fechasfuncions::class);
      }
}
