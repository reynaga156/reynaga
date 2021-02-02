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
    return view('welcome');
});

Auth::routes();


Route::get('/refresh_captcha', 'Auth\RegisterController@refrehCaptcha')->name('refresh');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'UsuarioController@index')->name('usuario');



Route::resource('clientes','ClienteController');
Route::resource('proveedors', 'ProveedorController');

Route::resource('tipos', 'TipoController');


Route::resource('productos', 'ProductoController');

