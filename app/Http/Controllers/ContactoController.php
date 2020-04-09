<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('contacto.index');
    }

    public function store(Request $request) {

        $Contacto = new Contacto();

        $Contacto->nombre       = $request->nombre;
        $Contacto->correo       = $request->correo;
        $Contacto->telefono     = $request->telefono;
        $Contacto->mensaje      = $request->mensaje;
        $Contacto->user_id      = Auth::id();

        $Contacto->save();

        return redirect()->route('contacto.index')->with('mensaje', 'Registro Guardado Correctamente');

    }
}
