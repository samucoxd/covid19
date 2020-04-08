<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EstadisticaController extends Controller
{
    public function index(){

        /* $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://covid19.mathdro.id/api/',
             // You can set any number of default request options.
             'timeout'  => 2.0,
        
        ]);
        
        $response = $client->request('GET', 'countries/BO');
        $Estadisticas = json_decode( $response->getBody()->getContents() ); */
        //dd($Estadisticas);
        //return view('estadistica.index', compact('Estadisticas'));

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country.php?country=bolivia",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "x-rapidapi-host: coronavirus-monitor.p.rapidapi.com",
                    "x-rapidapi-key: 6cc916d9ccmsh8bfc430d7ebce0fp11c499jsnbd860d2c94b0"
                ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                //echo $Estadisticas;
                $Estadisticas = json_decode($response);
                //dd($Estadisticas);
                return view('estadistica.index', compact('Estadisticas'));
            }
        }

    public function mundial() {
/*         $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://covid19.mathdro.id/api/',
             // You can set any number of default request options.
             'timeout'  => 2.0,
        
        ]);
        date_default_timezone_set('America/La_Paz');
        $hoy = date("m-d-y");  
        $post = 'daily/'.$hoy;
        //dd($post);
        $response = $client->request('GET', 'daily/04-06-2020');
        $Paises = json_decode( $response->getBody()->getContents() );
        return view('estadistica.mundial', compact('Paises')); */


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: coronavirus-monitor.p.rapidapi.com",
                "x-rapidapi-key: 6cc916d9ccmsh8bfc430d7ebce0fp11c499jsnbd860d2c94b0"
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
           // echo $response;
            $Paises = json_decode($response);
            return view('estadistica.mundial', compact('Paises'));

        }
    }
}
