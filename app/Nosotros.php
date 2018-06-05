<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Nosotros extends Model
{

    protected $table = 'nosotros';
    protected $fillable = ['banner',
    'titulo1', 'parrafo1',
    'titulo1', 'parrafo1',
    'titulo1', 'parrafo1',
    'titulo1', 'parrafo1',
    'imagen_intermedia', 'ultima_imagen'
    ];

    use searchable;

}
