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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('usuario', 'UsuarioController');
Route::resource('cliente', 'ClienteController');
Route::resource('informe', 'InformeController');
Route::get( '/', 'LoginAuthController@showLoginForm');
Route::post( 'login', 'LoginAuthController@login' )->name( 'login' );
Route::post( 'logout', 'LoginAuthController@logout' )->name( 'logout' );
