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

//bedrijf routes
Route::get('/bedrijf/','WerknemersController@edit')->name('bedrijven.edit');
Route::get('/bedrijf/{bedrijf}','WerknemersController@destroy')->name('bedrijven.delete');
Route::get('/bedrijf/create','WerknemersController@create')->name('bedrijven.create');
Route::put('/bedrijf/{bedrijf}', 'WerknemersController@update')->name('bedrijven.update');
Route::get('/bedrijf/{bedrijf}','WerknemersController@show')->name('bedrijven.show');




