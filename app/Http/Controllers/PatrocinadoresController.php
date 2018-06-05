<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patrocinadores;
use DB;
class PatrocinadoresController extends Controller
{
  public function index(Request $request)
  {
    $patrocinadores = Patrocinadores::orderBy('id','DESC')->paginate(5);
    return view('patrocinadores.index',compact('patrocinadores'))
        ->with('i', ($request->input('page', 1) - 1) * 5);

  }

  public function create()
  {
    $patrocinadores=Patrocinadores::all();

    return view('patrocinadores.create', compact('patrocinadores'));
  }

  public function show()
  {
    $patrocinadores = Patrocinadores::latest()->get();

    return view('patrocinadores.show', compact('patrocinadores'));
  }

  public function store(Request $request)
  {

        $this->validate(request(), [

            'nombre' => 'required',
            'link',
            'poster' => 'image|image_size:<=1000',
            'categoria' =>'required',
        ]);

        $patrocinadores = new Patrocinadores;

        $patrocinadores->nombre = request('nombre');
        $patrocinadores->link = ('link');
        $newFoto=request()->file('poster');
        if($newFoto){
          $name=$newFoto. '.' . $newFoto->getClientOriginalExtension();
          $patrocinadores->poster = $newFoto->move('./uploads/', $name);
        }
        $patrocinadores->categoria = request('categoria');

        $patrocinadores->save();


        return redirect('/patrocinadores');
  }


  public function edit($id)
  {
    $patrocinadores = Patrocinadores::find($id);
    return view('patrocinadores.edit', compact('patrocinadores'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'link',
      'poster' => 'image|image_size:<=400',
      'categoria' =>'required',
    ]);

    $patrocinadores = Patrocinadores::find($id);

    $patrocinadores->nombre = request ('nombre');
    $patrocinadores->link = ('link');
    $newFoto=request()->file('poster');
    if($newFoto){
      $name=$newFoto. '.' . $newFoto->getClientOriginalExtension();
      $patrocinadores->poster = $newFoto->move('./uploads/', $name);
    }
    $patrocinadores->categoria = request('categoria');

    $patrocinadores->save();
    return redirect()->route('patrocinadores.index')
                    ->with('success','Patrocinadores se actualizo correctamente.');
  }


  public function destroy($id)
  {
      Patrocinadores::find($id)->delete();
      return redirect()->route('patrocinadores.index')
                      ->with('success','Patrocinador eliminado correctamente');
  }


}
