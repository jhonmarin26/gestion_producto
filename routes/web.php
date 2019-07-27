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

Route::get('/', function () {
    return view('admin/index');
});

//Route::resource('users','UsersController');

/*Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as'   => 'users.destroy'
	]);*/
Route::resource('articulos','ArticulosController');
Route::resource('detalles','DetallesController');
Route::resource('investigador','InvestigadorController');
