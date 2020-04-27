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
//Usuario administrador
Route::get('/admin', 'AdminController@home');
Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/inicio', 'AdminController@inicio');
Route::get('/admin/listadoUsuarios', 'AdminController@listado');
Route::get('/admin/bloqueado', 'AdminController@bloqueado');
Route::get('/admin/listadoUsuariosBloqueado', 'AdminController@listadoBloqueados');
Route::get('/admin/logout', 'AdminController@logout');

//Usuario colaborador
Route::get('/colaborador', 'ColaboradorController@home');
Route::get('/colaborador/login', 'ColaboradorController@login');
Route::get('/colaborador/logout', 'ColaboradorController@logout');
Route::get('/colaborador/inicio', 'ColaboradorController@inicio');
Route::get('/colaborador/actividades', 'ColaboradorController@actividades');
Route::get('/colaborador/colabora', 'ColaboradorController@colaborar');
Route::get('/colaborador/contacta', 'ColaboradorController@contactar');
Route::get('/colaborador/naturaleza', 'ColaboradorController@naturaleza');
Route::get('/colaborador/ocio', 'ColaboradorController@ocio');
Route::get('/colaborador/tradicion', 'ColaboradorController@tradicion');
Route::get('/colaborador/patrimonio', 'ColaboradorController@patrimonio');
Route::get('/colaborador/poblaciones', 'ColaboradorController@poblaciones');
Route::get('/colaborador/poblaciones/abantoUsuario', 'ColaboradorController@abanto');
Route::get('/colaborador/poblaciones/aceredUsuario', 'ColaboradorController@acered');
Route::get('/colaborador/poblaciones/agonUsuario', 'ColaboradorController@agon');
Route::get('/colaborador/poblaciones/borjaUsuario', 'ColaboradorController@borjaSinMuseo');
Route::get('/colaborador/poblaciones/borjaUsuario/conMuseo', 'ColaboradorController@borjaConMuseo');
Route::get('/colaborador/poblaciones/borjaUsuario/museoVino', 'ColaboradorController@museoVino');
Route::get('/colaborador/poblaciones/borjaUsuario/museoVinoComentario', 'ColaboradorController@museoVinoComentario');
Route::get('/colaborador/poblaciones/borjaUsuario/museoVinoComentarioEditado', 'ColaboradorController@museoVinoComentarioEditado');
Route::get('/colaborador/poblaciones/borjaUsuario/ecceHomo', 'ColaboradorController@ecceHomo');
Route::get('/colaborador/poblaciones/borjaUsuario/colegiata', 'ColaboradorController@colegiata');
Route::get('/colaborador/poblaciones/daroca/gallocanta', 'ColaboradorController@gallocanta');
Route::get('/colaborador/poblaciones/nuevalos/monPiedra', 'ColaboradorController@monPiedra');
Route::get('/colaborador/poblaciones/calatayud/zombi', 'ColaboradorController@zombi');
Route::get('/colaborador/poblaciones/daroca/musicaAntigua', 'ColaboradorController@musicaAntigua');
Route::get('/colaborador/poblaciones/agramonte/rutaAG2', 'ColaboradorController@moncayo');
Route::get('/colaborador/poblaciones/uncastillo/bañales', 'ColaboradorController@bañales');
Route::get('/colaborador/poblaciones/mequinenza/castillo', 'ColaboradorController@mequinenza');
Route::get('/colaborador/poblaciones/ateca/mascara', 'ColaboradorController@mascara');
Route::get('/colaborador/poblaciones/tarazona/cipotegato', 'ColaboradorController@cipotegato');
Route::get('/colaborador/poblaciones/cetina/contradanza', 'ColaboradorController@contradanza');
Route::get('/colaborador/poblaciones/borjaUsuarioSinMuseo', 'ColaboradorController@sinMuseo');
Route::get('/colaborador/poblaciones/borjaUsuario/museoVinoImagen', 'ColaboradorController@museoVinoImagen');
Route::get('/colaborador/formActividad', 'ColaboradorController@formActividad');
Route::get('/colaborador/eliminarActividad', 'ColaboradorController@eliminarActividad');
Route::get('/colaborador/eliminarActividadOK', 'ColaboradorController@eliminarActividadOK');
Route::get('/colaborador/editarActividad', 'ColaboradorController@editarActividad');
Route::get('/colaborador/editarActividadOK', 'ColaboradorController@editarActividadOK');
Route::get('/colaborador/eliminarActividad', 'ColaboradorController@eliminarActividad');
Route::get('/colaborador/formImagen', 'ColaboradorController@formImagen');
Route::get('/colaborador/eliminarFoto', 'ColaboradorController@eliminarFoto');
Route::get('/colaborador/eliminarFotoOK', 'ColaboradorController@eliminarFotoOK');
Route::get('/colaborador/formComentario', 'ColaboradorController@formComentario');
Route::get('/colaborador/editarComentario', 'ColaboradorController@editarComentario');
Route::get('/colaborador/editarComentarioOK', 'ColaboradorController@editarComentarioOK');
Route::get('/colaborador/eliminarComentario', 'ColaboradorController@eliminarComentario');
Route::get('/colaborador/eliminarComentarioOK', 'ColaboradorController@eliminarComentarioOK');
Route::get('/colaborador/respuestaContacto', 'ColaboradorController@respuestaContacto');


//Usuario bloqueado
Route::get('/colaborador/bloqueado', 'ColaboradorController@inicioBloqueado');
Route::get('/colaborador/bloqueado/login', 'ColaboradorController@loginBloqueado');
Route::get('/colaborador/bloqueadoUsuario', 'ColaboradorController@bloqueadoUsuario');

//Usuario general sin registrar
Route::get('/poblaciones', 'UsuarioController@poblaciones');
Route::get('/poblaciones/abanto', 'UsuarioController@abanto');
Route::get('/poblaciones/acered', 'UsuarioController@acered');
Route::get('/poblaciones/agon', 'UsuarioController@agon');
Route::get('/poblaciones/borja', 'UsuarioController@borja');
Route::get('/actividades', 'UsuarioController@actividades');
Route::get('/colabora', 'UsuarioController@colaborar');
Route::get('/colabora/registrado', 'UsuarioController@registrado');
Route::get('/colabora/colaborador', 'UsuarioController@colaborador');
Route::get('/contacta', 'UsuarioController@contactar');
Route::get('/', 'UsuarioController@home');
Route::get('/naturaleza', 'UsuarioController@naturaleza');
Route::get('/patrimonio', 'UsuarioController@patrimonio');
Route::get('/ocio', 'UsuarioController@ocio');
Route::get('/tradicion', 'UsuarioController@tradicion');
Route::get('/login', 'UsuarioController@login');
Route::get('/logout', 'UsuarioController@logout');
Route::get('/registro', 'UsuarioController@registro');
Route::get('/poblaciones/borja/ecceHomo', 'UsuarioController@ecceHomo');
Route::get('/poblaciones/nuevalos/monPiedra', 'UsuarioController@monPiedra');
Route::get('/poblaciones/cetina/contradanza', 'UsuarioController@contradanza');
Route::get('/poblaciones/borja/colegiataBorja', 'UsuarioController@colegiata');
Route::get('/poblaciones/borja/museoVino', 'UsuarioController@museoVino');
Route::get('/poblaciones/daroca/musicaAntigua', 'UsuarioController@musicaAntigua');
Route::get('/poblaciones/calatayud/zombi', 'UsuarioController@zombi');
Route::get('/poblaciones/daroca/gallocanta', 'UsuarioController@gallocanta');
Route::get('/poblaciones/agramonte/rutaAG2', 'UsuarioController@moncayo');
Route::get('/poblaciones/tarazona/cipotegato', 'UsuarioController@cipotegato');
Route::get('/poblaciones/ateca/mascara', 'UsuarioController@mascara');
Route::get('/poblaciones/mequinenza/castillo', 'UsuarioController@castillo');
Route::get('/poblaciones/uncastillo/bañales', 'UsuarioController@bañales');
Route::get('/registroOK', 'UsuarioController@registroOK');
Route::get('/respuestaContacto', 'UsuarioController@respuestaContacto');

