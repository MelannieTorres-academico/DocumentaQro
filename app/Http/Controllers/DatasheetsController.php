<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Programa;
use App\Datasheet;
use Image;
//use PDO;

class DatasheetsController extends Controller
{


   

    public function index(Request $request){

         $datasheet = Datasheet::orderBy('id','DESC')->paginate(20);
        return view('datasheet.index',compact('datasheet'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

     public function create(){

        $programas=Programa::all();

        return view('datasheet.create', compact('programas'));

    }

        public function store(Request $request){


        $this->validate(request(), [

            'programa_id' => 'required',
            'titulo' => 'required',
            'director' => 'required',
            'pais' => 'required',
            'anio' => 'required',
            'duracion' => 'required',
            'costo' => 'required',
            'moneda' => 'required',
            'sinopsis' => 'required',
            'subtitulos' => 'required',

            'status' => 'required',
            'stills1',
            'stills2',
            'stills3',
            'poster' => 'required',



            ]);


/*

        $client = new \AlgoliaSearch\Client('X253FTY2KE', '74ff9a6e947f62c825298ffee01a228b');
        $index = $client->initIndex('datasheets');
        $pdo = new PDO('mysql:host=localhost;dbname=document_sysdoq', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $results = $pdo->query('SELECT * from datasheets');
        if ($results)
        {
          $batch = array();
          // iterate over results and send them by batch of 10000 elements
          foreach ($results as $row)
          {
            // select the identifier of this row
            $row['objectID'] = $row['id'];
            array_push($batch, $row);
            
            if (count($batch) == 10000)
            {
              $index->saveObjects($batch);
              $batch = array();
            }
          }
            
          $index->saveObjects($batch);
        }
*/

        $programa=Programa::find(request('programa_id'));        


        $datasheet = new Datasheet;
/*
        $res = $index->saveObject(array(  
            'programa' => $programa->titulo,
            'programa_id' => request('programa_id'),
            'titulo' => request('titulo'),
            'director' => request('director'),
            'pais' => request('pais'),
            'anio' => request('anio'),
            'duracion' => request('duracion'),
            'costo' => request('costo'),
            'moneda' => request('moneda'),
            'sinopsis' => request('sinopsis'),
            'subtitulos' => request('subtitulos'),
            'status' => request('status'),
            'poster' => request('poster'),
            'trailer' => request('trailer'),
            ));
            */

        $datasheet->programa = $programa->titulo;
        $datasheet->programa_id = request('programa_id');
        $datasheet->titulo = request('titulo');
        $datasheet->director = request('director');
        $datasheet->pais = request('pais');
        $datasheet->anio = request('anio');
        $datasheet->duracion = request('duracion');
        $datasheet->costo = request('costo');
        $datasheet->moneda = request('moneda');
        $datasheet->sinopsis = request('sinopsis');
        $datasheet->status = request('status');
        $datasheet->subtitulos = request('subtitulos');
        $datasheet->trailer = request('trailer');
        $datasheet->stills1 = request('stills1');
        $datasheet->stills2 = request('stills2');
        $datasheet->stills3 = request('stills3');
        $datasheet->poster = request('poster');


        $datasheet->save();

        return redirect()->route('datasheet.index')->with('success','Item created successfully');

    }

/*    public function show($id){

        $datasheet = Datasheet::find($id);
        return view('datasheet.show',compact('datasheet'));

  }
*/
  public function edit($id){


        $datasheet=Datasheet::find($id);
        $programas=Programa::all();

        return view('datasheet.edit', compact('datasheet','programas'));
    }



    public function update(Request $request, $id){


        $this->validate($request, [

            'programa_id' => 'required',
            'titulo' => 'required',
            'director' => 'required',
            'pais' => 'required',
            'anio' => 'required',
            'duracion' => 'required',
            'costo' => 'required',
            'moneda' => 'required',
            'sinopsis' => 'required',
            'subtitulos' => 'required',
            'status' => 'required',
            'stills1',
            'stills2',
            'stills3',
            'poster' => 'required',
        ]);

        $programa=Programa::find(request('programa_id'));

        $datasheet=Datasheet::find($id);

        $datasheet->programa = $programa->titulo;
        $datasheet->titulo = $request->titulo;
        $datasheet->director = $request->director;
        $datasheet->pais = $request->pais;
        $datasheet->anio = $request->anio;
        $datasheet->duracion = $request->duracion;
        $datasheet->subtitulos = $request->subtitulos;
        $datasheet->trailer = $request->trailer;
        $datasheet->costo = $request->costo;
        $datasheet->moneda = $request->moneda;
        $datasheet->sinopsis = $request->sinopsis;
        $datasheet->status = $request->status;
        $datasheet->programa_id = $request->programa_id;
        $datasheet->stills1 = $request->stills1;
        $datasheet->stills2 = $request->stills2;
        $datasheet->stills3 = $request->stills3;
        $datasheet->poster = $request->poster;

        $datasheet->save();


        return redirect()->route('datasheet.index')
                        ->with('success','Item updated successfully');


    }




    public function show($id){
      $datasheet=Datasheet::find($id);
      if($datasheet){

        if (strpos($datasheet->trailer, 'youtube') !== false){ //it is a youtube video
          if (strpos($datasheet->trailer, 'embed') !== false){ //it is well formated
            return view('datasheet.show', compact('datasheet'));
          }
          else{ //it is not, it must be corrected

            $watch_pos= strpos($datasheet->trailer, 'watch')+8;
            $new_trailer= 'https://www.youtube.com/embed/'.substr($datasheet->trailer, $watch_pos);
            $datasheet->trailer=$new_trailer;
            return view('datasheet.show', compact('datasheet'));
          }
        }
        else if(strpos($datasheet->trailer, 'imdb') !== false){ //its from imdb
          if (strpos($datasheet->trailer, 'videoembed') !== false){ //it is well formated
            return view('datasheet.show', compact('datasheet'));
          }

          else if (strpos($datasheet->trailer, '?') !== false){ // example :  //http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209?ref_=hm_hp_i_2
            $from= strpos($datasheet->trailer, 'videoplayer')+12;

            $stop=strpos($datasheet->trailer, '?');
            $length=strlen($datasheet->trailer);
            $until=$stop-$length;
            $new_trailer= 'http://www.imdb.com/videoembed/'.substr($datasheet->trailer, $from, $until);
            $datasheet->trailer=$new_trailer;

            return view('datasheet.show', compact('datasheet'));
          }
          else if (strpos($datasheet->trailer, 'videoplayer') !== false){ // example : http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209
            $from= strpos($datasheet->trailer, 'videoplayer')+12;

            $new_trailer= 'http://www.imdb.com/videoembed/'.substr($datasheet->trailer, $from);
            $datasheet->trailer=$new_trailer;

            return view('datasheet.show', compact('datasheet'));
          }

      }

      else if(strpos($datasheet->trailer, 'vimeo') !== false){ //its from vimeo
        if (strpos($datasheet->trailer, 'player') !== false){ //it is well formated
          return view('datasheet.show', compact('datasheet'));
        }

        else if (strpos($datasheet->trailer, 'staffpicks') !== false){ // example :  //https://vimeo.com/channels/staffpicks/214413623
          $from= strpos($datasheet->trailer, 'staffpicks')+11;


          $new_trailer= 'https://player.vimeo.com/video/'.substr($datasheet->trailer, $from);
          $datasheet->trailer=$new_trailer;

          return view('datasheet.show', compact('datasheet'));
        }
        else { // example : http://www.imdb.com/list/ls053181649/videoplayer/vi1303165209
          $from= strpos($datasheet->trailer, 'com')+4;

          $new_trailer= 'https://player.vimeo.com/video/'.substr($datasheet->trailer, $from);
          $datasheet->trailer=$new_trailer;

          return view('datasheet.show', compact('datasheet'));
        }

    }
    else{
      $datasheet->trailer='NULL';
      return view('datasheet.show', compact('datasheet'));

    }
  }
  else{
    return view('main_menu.notFound');
  }




  }





  public function ver($id){

     $datasheet=Datasheet::find($id);
    return view('datasheet.ver', compact('datasheet'));

  }



  public function destroy($id)
    {
        Datasheet::find($id)->delete();
        return redirect()->route('datasheet.index')
                          ->with('success','Ficha técnica borrada exitosamente');
    }

}
