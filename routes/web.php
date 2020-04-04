<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('nosotros.index', 'NosotrosController@index')->name('nosotros');
Route::get('estadistica.index', 'EstadisticaController@index')->name('estadistica');
Route::get('contacto.index', 'ContactoController@index')->name('contacto');
Route::get('covid.conocelo', 'CovidController@conocelo')->name('conocelo');
Route::get('covid.preparate', 'CovidController@preparate')->name('preparate');
Route::get('covid.actua', 'CovidController@actua')->name('actua');


Route::get('/api', function() {

  $client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://api.statworx.com/covid',
     // You can set any number of default request options.
     'timeout'  => 2.0,

]);
dd($client);
});

