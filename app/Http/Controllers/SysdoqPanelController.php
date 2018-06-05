<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SysdoqPanelController extends Controller
{

	public function index()
    {
        return view('sysdoq.sys');
    }

    
    
}
