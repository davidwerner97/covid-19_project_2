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

Route::get('/', 'StatusesController@index')->named('status.index');
Route::post('/status', 'StatusesController@store')->named('status.store');
Route::get('/status/create', 'StatusesController@create')->named('status.create');
Route::get('/status/{status}/edit', 'StatusesController@edit')->named('status.edit');
Route::put('/status/{status}', 'StatusesController@update')->named('status.update');
