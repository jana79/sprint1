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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', 'PruebaController@index');
Route::get('/articulos', 'PruebaController@store');
Route::get('/mostrar', 'PruebaController@show');
Route::get('/crear', 'PruebaController@create');
*/

Route::get('/poblaciones', 'PruebaController@poblaciones');
Route::get('/actividades', 'PruebaController@actividades');
Route::get('/colabora', 'PruebaController@colaborar');
Route::get('/colabora/registrado', 'PruebaController@registrado');
Route::get('/colabora/colaborador', 'PruebaController@colaborador');
Route::get('/contacta', 'PruebaController@contactar');
Route::get('/', 'PruebaController@home');
Route::get('/login', 'PruebaController@login');
Route::get('/registro', 'PruebaController@registro');
