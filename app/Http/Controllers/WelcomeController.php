<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Slider;
use App\Event;
use Carbon\Carbon;
use DB;

class WelcomeController extends Controller
{
  public function slider(Request $request)
  {
    $slider = Slider::latest()->get();
    $eventos=DB::table('events')
            ->join('fechas_eventos', 'events.id', '=', 'fechas_eventos.id_evento')
            ->select('events.*', 'fechas_eventos.id AS fecha_id' , 'fechas_eventos.start AS start', 'fechas_eventos.end', 'fechas_eventos.sedes_id')
            ->where('fechas_eventos.start','>=',Carbon::now())
              ->orderBy('fechas_eventos.start','asc')
              ->take(4)
              ->get();

    return view('welcome',compact('slider', 'eventos'));

  }

}
