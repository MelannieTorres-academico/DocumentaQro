<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use App\fechasEventos;
use App\Datasheet;
use App\Event;
use App\Calendario;
use App\Sedes;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Date;
use App\Funcion;
use Illuminate\Support\Facades\Input;

class EventsController extends Controller
{

  //funcion solo_hora recibe un arreglo de fechas y regresa un arreglo
  //solamente la hora en el formato {[19:00]}

     function solo_hora($string)
     {
       return substr($string, 10, 6);;
     }

     function traduccion_de_fechas($string, $string2)
     {
       $words = explode(" ", $string);
       $day_week = $words[0];
       $day = $words[1];
       $month = $words[2];
       $year = $words[3];
       $hora = self::solo_hora($string2);
       if ($day_week=='Monday') { $day_week='Lunes'; }
       elseif ($day_week=='Tuesday') { $day_week='Martes'; }
       elseif ($day_week=='Wednesday') { $day_week='Miércoles'; }
       elseif ($day_week=='Thursday') { $day_week='Jueves'; }
       elseif ($day_week=='Friday') { $day_week='Viernes'; }
       elseif ($day_week=='Saturday') { $day_week='Sábado'; }
       elseif ($day_week=='Sunday') { $day_week='Domingo'; }

       //mes
        if ($month=='January') { $month='Enero'; }
        elseif ($month=='February') { $month='Febrero'; }
        elseif ($month=='March') { $month='Marzo'; }
        elseif ($month=='April') { $month='Abril'; }
        elseif ($month=='May') { $month='Mayo'; }
        elseif ($month=='June') { $month='Junio'; }
        elseif ($month=='July') { $month='Julio'; }
        elseif ($month=='August') { $month='Agosto'; }
        elseif ($month=='September') { $month='Septiembre'; }
        elseif ($month=='October') { $month='Octubre'; }
        elseif ($month=='November') { $month='Noviembre'; }
        elseif ($month=='December') { $month='Diciembre'; }

       $fecha = $day_week." ".$day." ".$month." ".$year." ".$hora;
       return $fecha;
     }

     //funcion fechas_a_letras recibe un arreglo de fechas y regresa un arreglo con los strings
     //de las fechas en el siguiente formato: {[Miércoles 03 de Marzo de 2017]}
     function fechas_a_letras ($array_of_dates, $atribute)
     {
       $aux_array;
       $new_array[0] = ' ';
       foreach ($array_of_dates as $key => $date) {
         $dt = new \DateTime($date->$atribute);
         $aux_array[$key]= Carbon::instance($dt)->formatLocalized('%A %d %B %Y');
         $new_array[$key]=self::traduccion_de_fechas($aux_array[$key], $date->$atribute);
       }
       return $new_array;
     }



    public function index()
    {
      $data = Calendario::get(['id','titulo','start', 'color']);
      return Response()->json($data);
    }


    public function index2(Request $request)
    {
      $eventos=DB::table('events')
              ->join('fechas_eventos', 'events.id', '=', 'fechas_eventos.id_evento')
              ->join('sedes', 'sedes.id', '=', 'fechas_eventos.sedes_id')
              ->select('events.*', 'fechas_eventos.id AS fecha_id' , 'fechas_eventos.start', 'fechas_eventos.end', 'fechas_eventos.sedes_id', 'sedes.nombre')
              ->orderBy('id','DESC')->paginate(40);

      $last_id=0;

      $starts = self::fechas_a_letras($eventos,  'start');

        return view('evento.index',compact('eventos', 'last_id', 'starts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $sedes=Sedes::all();
      return view('evento.create', compact('sedes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $this->validate(request(), [

            'titulo' => 'required',
            'descripcion' => 'required',
            'sede' =>'required',
            'poster' => 'required',
            'start'=> 'required',
            'end'=> 'required',
        ]);

        $title = request('titulo');
        $name=request('poster');
        $poster = request('poster');
        $descripcion = request('descripcion');
        $sedes_id = request('sede');
        $arraystart=request('start');
        $arrayend=request('end');
        $arraysedes=request('sede');
        $color = request('color');
        $link='';

        $evento = new Event;

        $evento->title = $title;
        $evento->poster = $poster;
        $evento->descripcion = $descripcion;
        $evento->color = $color;
        $evento->link=$link;

        $evento->save();
        foreach ($arraystart as $i => $start){
            $fechas = new fechasEventos;

            $fechas->start = $arraystart[$i];
            $fechas->end = $arrayend[$i];
            $fechas->id_evento= $evento->id;
            $fechas->sedes_id = $arraysedes[$i];
            $fechas->save();
        }

        foreach ($arraystart as $i => $start){
          $calendario=new Calendario;

          $calendario->event_id=$evento->id;
          $calendario->title=$evento->title;
          $calendario->start = $arraystart[$i];
          $calendario->sedes_id = $arraysedes[$i];
          $calendario->color = $color;
          $calendario->funcion_id=0;
          $calendario->programa_id=0;

          $calendario->save();
        }

        return redirect('/evento');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
           } else if(strpos($string, 'imdb') !== false){ //its from imdb
               if (strpos($string, 'videoembed') !== false){ //it is well formated
                 return $string;
               } else if (strpos($string, '?') !== false){ // example :  //http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209?ref_=hm_hp_i_2
                 $from= strpos($string, 'videoplayer')+12;
                 $stop=strpos($string, '?');
                 $length=strlen($string);
                 $until=$stop-$length;
                 $new_trailer= 'http://www.imdb.com/videoembed/'.substr($string, $from, $until);
                 return $new_trailer;
               } else if (strpos($string, 'videoplayer') !== false){ // example : http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209
                 $from= strpos($string, 'videoplayer')+12;

                 $new_trailer= 'http://www.imdb.com/videoembed/'.substr($string, $from);
                 return $new_trailer;
               }
         } else if(strpos($string, 'vimeo') !== false){ //its from vimeo
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

    public function show()
    {
      $programas=Programa::all()->where('id', '>', 1);
      $sedes=Sedes::all();
      return view('main_menu.calendario', compact('programas', 'sedes' ));
    }

    public function show2($id)
    {
      $calendario=Calendario::find($id);

          //es un evento
          if($calendario){
            if($calendario->funcion_id==0){

              $event=Event::find($calendario->event_id);
              $fechas=DB::table('fechas_eventos')
                      ->join('sedes', 'sedes.id', '=', 'fechas_eventos.sedes_id')
                      ->select('fechas_eventos.*','fechas_eventos.sedes_id', 'sedes.nombre')
                      ->where('fechas_eventos.id_evento', $calendario->event_id)->orderBy('id','DESC')->paginate();

              $starts=self::fechas_a_letras($fechas, 'start');

              return view ('evento.showEvent', compact('event','fechas', 'starts'));

          }
          // es una funcion
          elseif ($calendario->event_id==0) {

            $funcion=Funcion::find($calendario->funcion_id);//$calendario->funcion_id);

            $datasheets=DB::table('datasheet_funcions')
                        ->join('datasheets', 'datasheet_funcions.datasheet_id', '=', 'datasheets.id' )
                        ->where('datasheet_funcions.funcion_id', '=', $calendario->funcion_id)
                        ->select( 'datasheets.*')
                        ->orderBy('id','DESC')->paginate(40);

            $sedes = Sedes::all();
            $fechas=DB::table('fechasfuncions')
                    ->join('sedes', 'sedes.id', '=', 'fechasfuncions.sedes_id')
                    ->select('fechasfuncions.*', 'nombre')
                    ->where('fechasfuncions.id_funcion', $calendario->funcion_id)->orderBy('id','DESC')->paginate();

            $video=self::video($datasheets[0]->trailer);
            $starts=self::fechas_a_letras($fechas, 'start');

            return view ('funciones.showFunction', compact('funcion', 'datasheets', 'fechas','sedes', 'video', 'starts'));
          }
        } else {
          return view ('main_menu.notFound');
        }
    }

    public function show3 ($id){
      $event=Event::find($id);
      $fechas=DB::table('fechas_eventos')
              ->join('sedes', 'sedes.id', '=', 'fechas_eventos.sedes_id')
              ->select('fechas_eventos.*','fechas_eventos.sedes_id', 'sedes.nombre')
              ->where('fechas_eventos.id_evento', $id)->orderBy('id','DESC')->paginate();

              $starts=self::fechas_a_letras($fechas, 'start');

      return view ('evento.show', compact('event','fechas', 'starts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $evento = Event::find($id);
      $sedes = Sedes::all();
      $fechas=DB::table('fechas_eventos')
              ->select('fechas_eventos.*')
              ->where('fechas_eventos.id_evento', $id)->orderBy('id','DESC')->paginate();


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

      return view('evento.edit', compact('sedes', 'evento', 'fechas', 'start_date', 'end_date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'descripcion' => 'required',
            'sede' =>'required',
            'poster' => 'required',
            'start'=> 'required',
            'end'=> 'required',
            'sede'=> 'required',
            'color'=> 'required',
        ]);

        $evento = Event::find($id);
        $evento->title = request('title');
        $evento->descripcion = request('descripcion');
        $evento->poster = request('poster');
        $evento->color = request('color');
        $evento->save();

        $deleted = DB::delete('delete from fechas_eventos where id_evento ='.$id);

        $arraystart=request('start');
        $arrayend=request('end');
        $arraysedes=request('sede');

        foreach ($arraystart as $i => $start) {
          $fechas = new fechasEventos;
          $fechas->start = $arraystart[$i];
          $fechas->end = $arrayend[$i];
          $fechas->id_evento= $evento->id;
          $fechas->sedes_id = $arraysedes[$i];
          $fechas->save();
        }

        $deleted = DB::delete('delete from calendario where event_id ='.$id);

        foreach ($arraystart as $i => $start){
          $calendario=new Calendario;
          $calendario->event_id=$evento->id;
          $calendario->title=$evento->title;
          $calendario->start = $arraystart[$i];
          $calendario->sedes_id = $arraysedes[$i];
          $evento->color = request('color');
          $calendario->funcion_id=0;
          $calendario->programa_id=0;
          $calendario->save();
        }

        return redirect()->route('evento.index2')
                        ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function destroy($id)
    {
         Event::find($id)->delete();
         fechasEventos::where('id_evento', $id)->delete();
         Calendario::where('event_id', $id)->delete();
         return redirect()->route('evento.index2')
                        ->with('success','Evento eliminado exitosamente');
    }




    public function next(Request $request)
    {
    $eventos=DB::table('events')
        ->join('fechas_eventos', 'events.id', '=', 'fechas_eventos.id_evento')
        ->select('events.*', 'fechas_eventos.id AS fecha_id' , 'fechas_eventos.start AS start', 'fechas_eventos.end', 'fechas_eventos.sedes_id')
        ->where('fechas_eventos.start','>=',Carbon::now())
        ->orderBy('fechas_eventos.start','asc')
        ->take(0)
        ->get();

    return view('evento.next',compact('eventos'));
    }

    public function fetchEvents(){
      $sede = Input::get('sede');
      $programa = Input::get('programa');

      if(!$sede && !$programa){
        $eventos = Calendario::all();
      } else if (!$sede && $programa){
        $eventos = Calendario::where('programa_id', $programa)->get();
      } else if($sede && !$programa){
        $eventos = Calendario::where('sedes_id',$sede)->get();
      } else if($sede && $programa){
        $eventos = Calendario::where('sedes_id', $sede)->where('programa_id',$programa)->get();
      }

      return $eventos;
    }

}
