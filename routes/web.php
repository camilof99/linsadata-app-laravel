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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/usuario','UsuarioController@index');
//Route::get('/usuario/create', 'UsuarioController@create');
Route::resource('usuario', 'UsuarioController');

//Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('loginAuth');
});
Route::post ('/verificar', 'LoginAuthController@LoginUsuario');
Route::get('/dashboard', function () {
    return view('dashboard');
});
