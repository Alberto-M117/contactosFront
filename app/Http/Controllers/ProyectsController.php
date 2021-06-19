<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdatosempresa;
use App\Models\mproyecto;

class ProyectsController extends Controller
{

    public function proyects(){

        $datos = mproyecto::find(1);
        
        
        return view('proyects', compact('datos'));
    }
}
