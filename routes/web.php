<?php

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

Route::get('/', ['as'=>'home', 'uses' => 'ZapatosController@index']);
Route::get('/agregar/create', ['as'=>'zapato.create', 'uses' => 'ZapatosController@create']);
Route::post('/agregar', ['as'=>'zapato.store', 'uses' => 'ZapatosController@store']);
Route::get('/editar/{id}', ['as'=>'zapato.edit', 'uses' => 'ZapatosController@edit']);
Route::put('/actualizar/{id}', ['as'=>'zapato.update', 'uses' => 'ZapatosController@update']);
Route::delete('/eliminar/{id}', ['as'=>'zapato.destroy', 'uses' => 'ZapatosController@destroy']);


Route::get('/zapatos', 'ZapatosRestController@index');
Route::get('/zapatos/{id}', 'ZapatosRestController@show');
Route::post('/zapatos', 'ZapatosRestController@store');
Route::put('/zapatos/{id}', 'ZapatosRestController@update');
Route::delete('/zapatos/{id}', 'ZapatosRestController@destroy');