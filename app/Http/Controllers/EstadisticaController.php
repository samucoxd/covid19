<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EstadisticaController extends Controller
{
    public function index(){

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://covid19.mathdro.id/api/',
             // You can set any number of default request options.
             'timeout'  => 2.0,
        
        ]);
        
        $response = $client->request('GET', 'countries/bolivia');
        $Estadisticas = json_decode( $response->getBody()->getContents() );
        //dd($Estadisticas);
        return view('estadistica.index', compact('Estadisticas'));
    }
}
