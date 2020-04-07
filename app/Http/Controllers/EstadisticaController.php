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
        
        $response = $client->request('GET', 'countries/BO');
        $Estadisticas = json_decode( $response->getBody()->getContents() );
        //dd($Estadisticas);
        return view('estadistica.index', compact('Estadisticas'));
    }

    public function mundial() {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://covid19.mathdro.id/api/',
             // You can set any number of default request options.
             'timeout'  => 2.0,
        
        ]);
        date_default_timezone_set('America/La_Paz');
        $hoy = date("m-d-y");  
        $post = 'daily/'.$hoy;
        //dd($post);
        $response = $client->request('GET', $post);
        $Paises = json_decode( $response->getBody()->getContents() );
        return view('estadistica.mundial', compact('Paises'));
    }
    
}
