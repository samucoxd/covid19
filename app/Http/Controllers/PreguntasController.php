<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;


class PreguntasController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index() {
        $Preguntas = Preguntas::all();
        return view('preguntas.index', compact('Preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preguntas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Preguntas = new Preguntas;
        $Preguntas->titulo        = $request->titulo;
        $Preguntas->contenido     = $request->contenido;
        $Preguntas->autor         = $request->autor;
        $Preguntas->save();
        return redirect()->route('preguntas.index')->with('mensaje', 'Registro Guardado Correctamente');
    }

}
