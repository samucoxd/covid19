<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CovidController extends Controller
{
    public function conocelo() {
        return view('conocelo');
    }
    public function preparate() {
        return view('preparate');
    }
    public function actua() {
        return view('actua');
    }
}
