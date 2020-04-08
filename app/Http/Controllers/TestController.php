<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {

        return view('test.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Test = new Test();
        $Test->tos        = $request->tos;
        $Test->respirar   = $request->respirar;
        $Test->salud      = $request->salud;
        $Test->edad       = $request->edad;
        $Test->ci         = $request->ci;
        $Test->correo     = $request->correo;
        $Test->telefono   = $request->telefono;
        $Test->direccion  = $request->direccion;
        $Test->user_id    = Auth::id();

        $Test->save();
        return redirect()->route('test.create')->with('mensaje', 'Registro Guardado Correctamente');
    }

}
