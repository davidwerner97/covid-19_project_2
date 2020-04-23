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
//werknemer routes
Route::get('/werknemer/','WerknemersController@index')->name('werknemer.index');
Route::get('/werknemer/create','WerknemersController@create')->name('werknemer.create');
Route::get('/werknemer/{Werknemer}/','WerknemersController@show')->name('werknemer.show');
