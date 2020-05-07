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
Route::get('/bedrijf', 'BedrijvenController@index')->name('bedrijven.index');
Route::post('/bedrijf', 'BedrijvenController@store')->name('bedrijven.store');
Route::get('/bedrijf/create', 'BedrijvenController@create')->name('bedrijven.create');
Route::get('/bedrijf/{bedrijf}', 'BedrijvenController@show')->name('bedrijven.show');
Route::get('/bedrijf/{bedrijf}/edit', 'BedrijvenController@edit')->name('bedrijven.edit');
Route::put('/bedrijf/{bedrijf}', 'BedrijvenController@update')->name('bedrijven.update');
Route::delete('/bedrijf/{bedrijf}/delete', 'BedrijvenController@destroy')->name('bedrijven.delete');



