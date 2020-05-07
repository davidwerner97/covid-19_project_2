<?php

use Illuminate\Support\Facades\Route;

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
});

/*Route::get('/artikelen/create', function () {
    return view('artikelen.create');
});*/

//status routes
Route::get('/', 'StatusesController@index')->named('status.index');
Route::post('/status', 'StatusesController@store')->named('status.store');
Route::get('/status/create', 'StatusesController@create')->named('status.create');
Route::get('/status/{status}/edit', 'StatusesController@edit')->named('status.edit');
Route::put('/status/{status}', 'StatusesController@update')->named('status.update');

//werknemer routes
Route::get('/werknemer/','WerknemersController@index')->name('werknemer.index');
Route::post('/werknemer/', 'WerknemersController@store')->name('werknemer.store');
Route::get('/werknemer/create','WerknemersController@create')->name('werknemer.create');
Route::get('/werknemer/{Werknemer}/','WerknemersController@show')->name('werknemer.show');


// Artikelen routes
Route::get('/artikelen', 'ArtikelenController@index')->name('artikelen.single');
Route::get('/artikelen/create', 'ArtikelenController@create');
Route::get('/artikelen/{artikel}', 'ArtikelenController@show')->name('artikelen.single');
//Route::post('/artikelen', 'ArtikelenController@store');

//bedrijf routes
Route::get('/bedrijf/{bedrijf}/edit','WerknemersController@edit')->name('bedrijven.edit');
Route::get('/bedrijf/{bedrijf}/delete','WerknemersController@destroy')->name('bedrijven.delete');
Route::put('/bedrijf/{bedrijf}', 'WerknemersController@update')->name('bedrijven.update');
Route::get('/bedrijf/{bedrijf}','WerknemersController@show')->name('bedrijven.show');


