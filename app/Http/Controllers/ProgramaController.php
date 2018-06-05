<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Programa;
use App;

class ProgramaController extends Controller
{
  public function index(Request $request)
  {
      $programas = Programa::orderBy('id','DESC')->paginate(5);
      return view('programa.index',compact('programas'))
          ->with('i', ($request->input('page', 1) - 1) * 5);
  }


  public function create()
  {
      return view('programa.create');
  }

  public function store()
  {

    $this->validate(request(), [

        'titulo' => 'required',
        'descripcion' => 'required',
        'poster' => 'required|image|image_size:<=1000',
    ]);

    $programa = new Programa;

    $programa->titulo = request('titulo');
    $programa->descripcion = request('descripcion');
    $name=request()->file('poster'). '.' . request()->file('poster')->getClientOriginalExtension();
    $programa->poster = request()->file('poster')->move('./uploads/', $name);


    $programa->save();

    return redirect('/programas');
  }

  public function destroy($id)
  {
      Programa::find($id)->delete();
      return redirect()->route('programa.index')
                      ->with('success','Item deleted successfully');
  }

  public function show($id)
  {
      $programa = Programa::find($id);
      return view('programa.show',compact('programa'));
  }

  public function edit($id)
  {
      $programa = Programa::find($id);
      return view('programa.edit',compact('programa'));
  }

  public function update(Request $request, $id)
  {
      $this->validate(request(), [

          'titulo' => 'required',
          'descripcion' => 'required',
          'poster' => 'image|image_size:<=1000',
      ]);
      $programa = Programa::find($id);

      $programa->titulo = request('titulo');
      $newPoster=request()->file('poster');
      if($newPoster){
        $name=$newPoster. '.' . $newPoster->getClientOriginalExtension();
        $programa->poster = $newPoster->move('./uploads/', $name);
      }
      $programa->descripcion = request('descripcion');


      $programa->save();
        return redirect()->route('programa.index')
                         ->with('success','Item updated successfully');
  }
  public function showMainMenu($titulo)
  {
      $programa=Programa::where('titulo', $titulo)->first();
      if($programa){
        if($titulo=='ninguno'){
          return view('main_menu.notFound');
        }
        else{
          return view('main_menu.programa',compact('programa'));
        }
      }
      else{
        return view('main_menu.notFound');
      }
  }

  public function showProgramas()
  {
    $programas = Programa::all();
          return view('main_menu.show_all', compact('programas'));


  }


}
