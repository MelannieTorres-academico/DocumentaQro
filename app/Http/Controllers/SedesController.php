<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sedes;
use DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;


class SedesController extends Controller
{
    public function index()
    {
      $sedes = Sedes::latest()->get();

      //You can change this inital location to anywhere so the map will start centred near the area you will cover
      Mapper::map(20.79517070, -101.48460120, ['zoom' => 10, 'center' => false, 'marker' => false, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);;
        $collection = Sedes::all();
        $collection->each(function($sedes)
        {
            $content = $sedes->nombre;

            Mapper::informationWindow($sedes->latitud, $sedes->longitud, $content);
        });

      return view('sedes.display', compact('sedes'));

    }

    public function panel(Request $request)
    {
      $sedes = Sedes::orderBy('id','DESC')->paginate(5);
      return view('sedes.index',compact('sedes'))
          ->with('i', ($request->input('page', 1) - 1) * 5);


    }
    public function create()
    {
      return view('sedes.create');
    }

    public function show($id)
    {
      $sedes = Sedes::find($id);
      return view('sedes.show',compact('sedes'));
    }

 //    public function map()
 //    {
 //      $coordenadas = Sedes::all();
 //
 //       $coordenadas->latitud = Input::get('latitud');
 //       $coordenadas->longitud = Input::get('longitud');
 //
 //       return View::make('forecasts.index')
 //           ->with('coordenadas', $coordenadas);
 //
 //      $lat = Sedes::all()->;
 //
 //      return view('sedes.show', compact('coord'));
 //
 //
 //      var locations = [
 // @foreach ($locations as $location)
 //     [ {{ $location->location_latitude }}, {{ $location->location_longitude }} ]
 // @endforeach
 // ];
 //    }

    public function store(){

        $this->validate(request(), [


            'nombre'=> 'required',
            'info'=> 'required',
            'direccion'=>'required',
            'latitud'=>'required',
            'longitud'=>'required',
            'link'=>'required',
            'poster'=>'image|image_size:<=1000'

            ]);

      $sede = new Sedes;

      $sede->nombre = request('nombre');
    	$sede->info = request('info');
    	$sede->direccion = request('direccion');
      $sede->latitud = request('latitud');
      $sede->longitud = request('longitud');
    	$sede->link = request('link');
      $name=request()->file('poster'). '.' . request()->file('poster')->getClientOriginalExtension();
      $sede->poster = request()->file('poster')->move('./uploads/', $name);


      $sede->save();

      return redirect('/sedes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sedes::find($id);
        return view('sedes.edit',compact('sede'));
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
      $this->validate($request, [
        'nombre'=> 'required',
        'info'=> 'required',
        'direccion'=>'required',
        'latitud'=>'required',
        'longitud'=>'required',
        'link' => 'required',
        'poster'=> 'image|image_size:<=1000',
      ]);

      $sedes = Sedes::find($id);

      $sedes->nombre = request ('nombre');
      $sedes->info = request ('info');
      $sedes->direccion = request('direccion');
      $sedes->latitud = request('latitud');
      $sedes->longitud = request('longitud');
      $sedes->link = request('link');
      $newFoto=request()->file('poster');
      if($newFoto){
        $name=$newFoto. '.' . $newFoto->getClientOriginalExtension();
        $sedes->poster = $newFoto->move('./uploads/', $name);
      }

      $sedes->save();
      return redirect()->route('sedes.index')
                      ->with('success','Sedes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sedes::find($id)->delete();
        return redirect()->route('sedes.index')
                        ->with('success','Sedes deleted successfully');
    }





}
