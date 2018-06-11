<?php

namespace App\Http\Controllers;
use App\Nosotros;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index(){
      $nosotros = Nosotros::first();
      return view('nosotros.index',compact('nosotros'));

    }

}
