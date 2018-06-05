<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;

class SliderController extends Controller
{
    public function index(Request $request)
    {

      $slider = Slider::orderBy('created_at','desc')->paginate(5);
      return view('slider.index',compact('slider'))
          ->with('i', ($request->input('page', 1) - 1) * 5);


    }

    public function display()
    {
      $slider = Slider::latest()->get();
      return view('slider.display',compact('slider'));

    }
    public function create()
    {
      return view('slider/create');
    }

    public function show()
    {
      $slider = Slider::latest()->get();
      return view('slider.show', compact('slider'));
    }

    public function store(){

        $this->validate(request(), [


            'titulo'=> 'required',
            'subtitulo'=> 'required',
            'link'=>'required',
            'poster'=>'required'

            ]);

      $slider = new Slider;

      $slider->titulo = request('titulo');
      $slider->subtitulo = request('subtitulo');
      $slider->link = request('link');
      $name=request()->file('poster'). '.' . request()->file('poster')->getClientOriginalExtension();
      $slider->poster = request()->file('poster')->move('./uploads/', $name);


      $slider->save();

      return redirect('/slider');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('slider.edit',compact('slider'));
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
        'titulo'=> 'required',
        'subtitulo'=> 'required',
        'link'=>'required',
        'poster' => 'image|image_size:<=1000',
      ]);

      $slider = Slider::find($id);

      $slider->titulo = request ('titulo');
      $slider->subtitulo = request ('subtitulo');
      $slider->link = request('link');
      $newFoto=request()->file('poster');
      if($newFoto){
        $name=$newFoto. '.' . $newFoto->getClientOriginalExtension();
        $slider->poster = $newFoto->move('./uploads/', $name);
      }

      $slider->save();
      return redirect()->route('slider.index')
                      ->with('success','Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('slider.index')
                        ->with('success','Slider deleted successfully');
    }




}
