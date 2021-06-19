<?php

namespace App\Http\Controllers;
use App\Models\mdatosempresa;
use App\Models\mservicios;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){

        $datos = mservicios::all();

        //jalar datos del card
        $datos1 = mservicios::find(1);
        $datos2 = mservicios::find(2);
        $datos3 = mservicios::find(3);
        $datos4 = mservicios::find(4);

        return view('services', compact('datos','datos1','datos2','datos3','datos4'));
    }
}
