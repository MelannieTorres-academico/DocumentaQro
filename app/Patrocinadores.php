<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrocinadores extends Model
{
  protected $table = 'patrocinadores';

  protected $fillable = ['nombre', 'link', 'poster', 'categoria'];
}
