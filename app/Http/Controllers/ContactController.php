<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Models\mdatosempresa;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  contact()
    {

        $datos = mdatosempresa::all();

        return view('contact', compact('datos'));
    }

    //Retornar la vista 
    public function index()
    {
    }

    // Enviar los datos al correo
    public function store(Request $request)
    {

        //Validaciones del formulario 
        $request ->validate([

        'nombre' => 'required',
        'correo' => 'required|email',
        'mensaje' => 'required',

        ]);
        // pasar informacion al constructor desde el form con requst
        $correo = new ContactanosMailable($request->all());
        Mail::to('sansoreschay@gmail.com')->send($correo);


        //Este codigo es el que redirecciona a la pagina de contacto despues de enviarse el correo el with indica si hay sesion y contiene el mensaje del alert
        return redirect()->route('contactanos')->with('info', 'Mensaje Enviado');
    }
}
