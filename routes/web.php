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
    return view('inicio');
});
Route::get('/nosotros', 'PaginasController@nosotros');
Route::get('/contactos','PaginasController@contactos');
Route::get('/plantilla','PaginasController@plantilla');
Route::get('/loginEgresado','PaginasController@loginEgresado');
Route::get('/registrar','PaginasController@registrar');
Route::get('/lock','PaginasController@lock');
Route::get('/inicio','PaginasController@inicio');
Route::get('/loginJefe','PaginasController@loginJefe');
Route::get('/loginDepto','PaginasController@loginDepto');
