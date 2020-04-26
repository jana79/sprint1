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


Route::get('/poblaciones', 'PruebaController@poblaciones');
Route::get('/poblaciones/abanto', 'PruebaController@abanto');
Route::get('/poblaciones/acered', 'PruebaController@acered');
Route::get('/poblaciones/agon', 'PruebaController@agon');
Route::get('/poblaciones/borja', 'PruebaController@borja');
Route::get('/actividades', 'PruebaController@actividades');
Route::get('/colabora', 'PruebaController@colaborar');
Route::get('/colabora/registrado', 'PruebaController@registrado');
Route::get('/colabora/colaborador', 'PruebaController@colaborador');
Route::get('/contacta', 'PruebaController@contactar');
Route::get('/', 'PruebaController@home');
Route::get('/admin', 'PruebaController@homeAdmin');
Route::get('/naturaleza', 'PruebaController@naturaleza');
Route::get('/patrimonio', 'PruebaController@patrimonio');
Route::get('/ocio', 'PruebaController@ocio');
Route::get('/tradicion', 'PruebaController@tradicion');
Route::get('/login', 'PruebaController@login');
Route::get('/logout', 'PruebaController@logout');
Route::get('/registro', 'PruebaController@registro');
Route::get('/formActividad', 'PruebaController@formActividad');
Route::get('/formComentario', 'PruebaController@formComentario');
Route::get('/formImagen', 'PruebaController@formImagen');
Route::get('/poblaciones/borja/ecceHomo', 'PruebaController@ecceHomo');
Route::get('/poblaciones/nuevalos/monPiedra', 'PruebaController@monPiedra');
Route::get('/poblaciones/cetina/contradanza', 'PruebaController@contradanza');
Route::get('/poblaciones/borja/colegiataBorja', 'PruebaController@colegiata');
Route::get('/poblaciones/borja/museoVino', 'PruebaController@museoVino');
Route::get('/poblaciones/borja/museoVino/sinComentario', 'PruebaController@museoVinoSinComentario');
Route::get('/poblaciones/borja/museoVino/conComentario', 'PruebaController@museoVinoConComentario');
Route::get('/poblaciones/borja/museoVino/sinFoto', 'PruebaController@museoVinoSinFoto');
Route::get('/poblaciones/daroca/musicaAntigua', 'PruebaController@musicaAntigua');
Route::get('/poblaciones/calatayud/zombi', 'PruebaController@zombi');
Route::get('/poblaciones/daroca/gallocanta', 'PruebaController@gallocanta');
Route::get('/poblaciones/agramonte/rutaAG2', 'PruebaController@moncayo');
Route::get('/poblaciones/tarazona/cipotegato', 'PruebaController@cipotegato');
Route::get('/poblaciones/ateca/mascara', 'PruebaController@mascara');
Route::get('/poblaciones/mequinenza/castillo', 'PruebaController@castillo');
Route::get('/poblaciones/uncastillo/bañales', 'PruebaController@bañales');
Route::get('/usuarioColaborador', 'PruebaController@usuarioColaborador');
Route::get('/inicioColaborador', 'PruebaController@inicioColaborador');
Route::get('/formEditarComentario', 'PruebaController@editarComentario');
Route::get('/formEliminarComentario', 'PruebaController@eliminarComentario');
Route::get('/formEliminarFoto', 'PruebaController@eliminarFoto');
Route::get('/formEditarActividad', 'PruebaController@editarActividad');
Route::get('/eliminarFotoOK', 'PruebaController@eliminarFotoOK');
Route::get('/editarComentarioOK', 'PruebaController@editarComentarioOK');
Route::get('/eliminarComentarioOK', 'PruebaController@eliminarComentarioOK');
Route::get('/editarActividad', 'PruebaController@editarActividad');
Route::get('/editarActividadOK', 'PruebaController@editarActividadOK');
Route::get('/eliminarActividad', 'PruebaController@eliminarActividad');
Route::get('/eliminarActividadOK', 'PruebaController@eliminarActividadOK');
Route::get('/listadoUsuarios', 'PruebaController@listadoUsuarios');
Route::get('/bloqueado', 'PruebaController@bloqueado');
Route::get('/bloqueadoUsuario', 'PruebaController@bloqueadoUsuario');

