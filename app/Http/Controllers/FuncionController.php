<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use App\Funcion;
use App\fechasfuncions;
use App\Sedes;
use App\Event;
use App\Datasheet;
use App\datasheet_funcions;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Date;
use App\Calendario;
use App\Http\Controllers\EventsController;




class FuncionController extends Controller
{

  //funcion solo_hora recibe un arreglo de fechas y regresa un arreglo
  //solamente la hora en el formato {[19:00]}

     function solo_hora($string){
       $hora=substr($string, 10, 6);
       return $hora;
     }

     function traduccion_de_fechas($string, $string2){
       $words = explode(" ", $string);
       $day_week=$words[0];
       $day=$words[1];
       $month=$words[2];
       $year=$words[3];
       $hora=self::solo_hora($string2);
       if($day_week=='Monday'){$day_week='Lunes';}
       elseif($day_week=='Tuesday'){$day_week='Martes';}
       elseif($day_week=='Wednesday'){$day_week='Miércoles';}
       elseif($day_week=='Thursday'){$day_week='Jueves';}
       elseif($day_week=='Friday'){$day_week='Viernes';}
       elseif($day_week=='Saturday'){$day_week='Sábado';}
       elseif ($day_week=='Sunday') {$day_week='Domingo';}

       //mes
        if($month=='January'){$month='Enero';}
        elseif($month=='February'){$month='Febrero';}
        elseif($month=='March'){$month='Marzo';}
        elseif($month=='April'){$month='Abril';}
        elseif($month=='May'){$month='Mayo';}
        elseif($month=='June'){$month='Junio';}
        elseif($month=='July'){$month='Julio';}
        elseif($month=='August'){$month='Agosto';}
        elseif($month=='September'){$month='Septiembre';}
        elseif($month=='October'){$month='Octubre';}
        elseif($month=='November'){$month='Noviembre';}
        elseif($month=='December'){$month='Diciembre';}

       $fecha=$day_week." ".$day." ".$month." ".$year." ".$hora;
       return $fecha;

     }

     //funcion fechas_a_letras recibe un arreglo de fechas y regresa un arreglo con los strings
     //de las fechas en el siguiente formato: {[Miércoles 03 de Marzo de 2017]}
     function fechas_a_letras($array_of_dates, $atribute){
        $new_array[0]=' ';
        $aux_array;

           foreach ($array_of_dates as $key => $date) {
             $dt = new \DateTime($date->$atribute);
             $aux_array[$key]= Carbon::instance($dt)->formatLocalized('%A %d %B %Y');
             $new_array[$key]=self::traduccion_de_fechas($aux_array[$key], $date->$atribute);
           }

            return $new_array;


     }



  public function index(Request $request)
  {

    $funciones=DB::table('funcions')
            ->join('fechasfuncions', 'funcions.id', '=', 'fechasfuncions.id_funcion')
            ->join('sedes', 'sedes.id', '=', 'fechasfuncions.sedes_id')
            ->select('funcions.*',  'fechasfuncions.id AS fecha_id' , 'fechasfuncions.start', 'fechasfuncions.end', 'fechasfuncions.sedes_id', 'sedes.nombre')
            ->orderBy('id','DESC')->paginate(40);

    $datasheets=DB::table('datasheet_funcions')
                ->join('datasheets', 'datasheet_funcions.datasheet_id', '=', 'datasheets.id' )
                ->select('datasheet_funcions.*', 'datasheets.titulo')
                ->orderBy('id','DESC')->paginate(40);

    $starts=self::fechas_a_letras($funciones, 'start');



            $last_id=0;

      return view('funciones.index',compact('funciones', 'last_id', 'datasheets', 'starts'))
          ->with('i', ($request->input('page', 1) - 1) * 5);
  }


  public function create()
  {
    $datasheet = Datasheet::all()->sortBy('titulo');
    $sedes = Sedes::all();

      return view('funciones.create', compact('datasheet', 'sedes'));
  }



  public function store(){

      $this->validate(request(), [

          'start' => 'required',
          'end' => 'required',
          'color' => 'required',
//          'datasheet'=>'required'
      ]);

      $funcion = new Funcion;

      $funcion->color = request('color');

      $funcion->save();

      $arraystart=request('start');
      $arrayend=request('end');
      $arraysedes=request('sede');


      foreach ($arraystart as $i => $start){
          $fechas = new fechasfuncions;

          $fechas->start = $arraystart[$i];
          $fechas->end = $arrayend[$i];
          $fechas->id_funcion= $funcion->id;
          $fechas->sedes_id = $arraysedes[$i];
          $fechas->save();
      }

      $arraydatasheets = request('datasheet');

      foreach ($arraydatasheets as $i => $datasheet){
          $datasheet_funcion = new datasheet_funcions;
        //  $datasheet_id = Datasheet::find($datasheet);

          $datasheet_funcion->funcion_id = $funcion->id;
          $datasheet_funcion->datasheet_id = $datasheet;
          $datasheet_funcion->save();
      }


      foreach ($arraystart as $i => $start){
        $datasheet = Datasheet::find($arraydatasheets[0]);
        //$programa_id='1';

        $calendario=new Calendario;

        $calendario->funcion_id=$funcion->id;
        $calendario->programa_id=$datasheet->programa_id;

          $calendario->title=$datasheet->titulo;
          $calendario->start = $arraystart[$i];
          $calendario->sedes_id = $arraysedes[$i];
          $calendario->color = request('color');
          $calendario->event_id=0;



          $calendario->save();
      }


      return redirect('/funciones');

  }

  public function edit($id)
  {
    $funcion = Funcion::find($id);
    $datasheets=DB::table('datasheet_funcions')
                ->join('datasheets', 'datasheet_funcions.datasheet_id', '=', 'datasheets.id' )
                ->select('datasheet_funcions.*', 'datasheets.titulo')
                ->where('datasheet_funcions.funcion_id', '=', $id)
                ->orderBy('id','DESC')->paginate(40);
   $datasheet = Datasheet::all()->sortBy('titulo');

    $sedes = Sedes::all();
    $fechas=DB::table('fechasfuncions')
            ->select('fechasfuncions.*')
            ->where('fechasfuncions.id_funcion', $id)->orderBy('id','DESC')->paginate();


    foreach($fechas as $key=> $fecha){
      $dt = new \DateTime($fecha->start);
      $carbon = Carbon::instance($dt)->toIso8601String();
      $start_date[$key]=substr($carbon, 0, -9);
    }

    foreach($fechas as $key=> $fecha){
      $dt = new \DateTime($fecha->end);
      $carbon = Carbon::instance($dt)->toIso8601String();
      $end_date[$key]=substr($carbon, 0, -9);
    }

    return view('funciones.edit',compact('funcion', 'datasheets', 'datasheet','sedes','fechas', 'start_date', 'end_date'));
  }

  public function update(Request $request, $id){

    $this->validate(request(), [

        'start' => 'required',
        'end' => 'required',
        'color' => 'required',
//          'datasheet'=>'required'
    ]);


    $funcion = new Funcion;

    $funcion->color = request('color');

    $funcion->save();
    $deleted = DB::delete('delete from funcions where id ='.$id);

    $arraystart=request('start');
    $arrayend=request('end');
    $arraysedes=request('sede');


    foreach ($arraystart as $i => $start){
        $fechas = new fechasfuncions;


        $fechas->start = $arraystart[$i];
        $fechas->end = $arrayend[$i];
        $fechas->id_funcion= $funcion->id;
        $fechas->sedes_id = $arraysedes[$i];
        $fechas->save();
    }

    $arraydatasheets = request('datasheet');
    $deleted = DB::delete('delete from datasheet_funcions where funcion_id ='.$id);


    foreach ($arraydatasheets as $i => $datasheet){
        $datasheet_funcion = new datasheet_funcions;
      //  $datasheet_id = Datasheet::find($datasheet);

        $datasheet_funcion->funcion_id = $funcion->id;
        $datasheet_funcion->datasheet_id = $datasheet;
        $datasheet_funcion->save();
    }

    $deleted = DB::delete('delete from calendario where funcion_id ='.$id);


    foreach ($arraystart as $i => $start){
        $datasheet = Datasheet::find($arraydatasheets[0]);
        $calendario=new Calendario;
        $calendario->funcion_id=$funcion->id;
        $calendario->programa_id=$datasheet->programa_id;
        $calendario->title=$datasheet->titulo;
        $calendario->start = $arraystart[$i];
        $calendario->sedes_id = $arraysedes[$i];
        $calendario->color = request('color');
        $calendario->event_id=0;
        $calendario->save();
    }
    return redirect('/funciones')
    ->with('success','Item updated successfully');
  }
  public function video ($string){

        if (strpos($string, 'youtube') !== false){ //it is a youtube video
              if (strpos($string, 'embed') !== false){ //it is well formated
                return $string;
              }
              else{ //it is not, it must be corrected

                $watch_pos= strpos($string, 'watch')+8;
                $new_trailer= 'https://www.youtube.com/embed/'.substr($string, $watch_pos);
                return $new_trailer;
              }
        }
        else if(strpos($string, 'imdb') !== false){ //its from imdb
              if (strpos($string, 'videoembed') !== false){ //it is well formated
                return $string;
              }

              else if (strpos($string, '?') !== false){ // example :  //http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209?ref_=hm_hp_i_2
                $from= strpos($string, 'videoplayer')+12;
                $stop=strpos($string, '?');
                $length=strlen($string);
                $until=$stop-$length;
                $new_trailer= 'http://www.imdb.com/videoembed/'.substr($string, $from, $until);
                return $new_trailer;
              }
              else if (strpos($string, 'videoplayer') !== false){ // example : http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209
                $from= strpos($string, 'videoplayer')+12;

                $new_trailer= 'http://www.imdb.com/videoembed/'.substr($string, $from);
                return $new_trailer;
              }
      }

      else if(strpos($string, 'vimeo') !== false){ //its from vimeo
        if (strpos($string, 'player') !== false){ //it is well formated
          return $string;
        }

        else if (strpos($string, 'staffpicks') !== false){ // example :  //https://vimeo.com/channels/staffpicks/214413623
          $from= strpos($string, 'staffpicks')+11;
          $new_trailer= 'https://player.vimeo.com/video/'.substr($dstring, $from);
          return $new_trailer;
        }
        else { // example : http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209
          $from= strpos($string, 'com')+4;
          $new_trailer= 'https://player.vimeo.com/video/'.substr($string, $from);
          return $new_trailer;
        }

    }
      return 'NULL';


  }



  public function show ($id){

    $calendario=Calendario::find($id);
    $funcion=Funcion::find($calendario->funcion_id);

    $datasheets=DB::table('datasheet_funcions')
                ->join('datasheets', 'datasheet_funcions.datasheet_id', '=', 'datasheets.id' )
                ->select( 'datasheets.*')
                ->where('datasheet_funcions.funcion_id', '=', $id)
                ->orderBy('id','DESC')->paginate(40);

    $sedes = Sedes::all();
    $fechas=DB::table('fechasfuncions')
            ->join('sedes', 'sedes.id', '=', 'fechasfuncions.sedes_id')
            ->select('fechasfuncions.*', 'sedes.nombre')
            ->where('fechasfuncions.id_funcion', $funcion->id)->orderBy('id','DESC')->paginate();

    $starts=self::fechas_a_letras($fechas, 'start');


    $video=self::video($datasheets[0]->trailer);

    return view ('funciones.show', compact('funcion', 'datasheets', 'fechas','sedes', 'video', 'starts'));

  }

  public function destroy($id)
  {
       Funcion::find($id)->delete();
       fechasfuncions::where('id_funcion', $id)->delete();
       Calendario::where('funcion_id', $id)->delete();
      return redirect()->route('funciones.index')
                      ->with('success','Función eliminada exitosamente');
  }






}
