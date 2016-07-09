<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Front\FrontController@index');
Route::get('contacto','Front\FrontController@contacto');
Route::get('reviews','Front\FrontController@reviews');
Route::get('admin', 'Admin\AdminController@index');
Route::resource('usuario', 'Front\UsuarioController');
Route::resource('genero', 'Genero\GeneroController');

Route::resource('log', 'Log\LoginController');
Route::get('logout', 'Log\LoginController@logout');

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
