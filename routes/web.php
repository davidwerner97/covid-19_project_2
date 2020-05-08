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

//status routes
Route::get('/status/', 'StatusesController@index')->name('status.index');
Route::get('/status/{status}','StatusesController@show')->name('status.show');
Route::post('/status/', 'StatusesController@store')->name('status.store');
Route::get('/status/create', 'StatusesController@create')->name('status.create');
Route::get('/status/{status}/edit', 'StatusesController@edit')->name('status.edit');
Route::get('/status/{status}/delete','StatusesController@destroy')->name('status.delete');
Route::put('/status/{status}', 'StatusesController@update')->name('status.update');

//werknemer routes
Route::get('/werknemer/','WerknemersController@index')->name('werknemer.index');
Route::post('/werknemer/', 'WerknemersController@store')->name('werknemer.store');
Route::get('/werknemer/create','WerknemersController@create')->name('werknemer.create');
Route::get('/werknemer/{werknemer}/edit','WerknemersController@edit')->name('werknemer.edit');
Route::get('/werknemer/{werknemer}/delete','WerknemersController@destroy')->name('werknemer.delete');
Route::put('/werknemer/{werknemer}', 'WerknemersController@update')->name('werknemer.update');
Route::get('/werknemer/{werknemer}','WerknemersController@show')->name('werknemer.show');


