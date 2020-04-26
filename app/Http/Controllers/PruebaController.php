<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    
    public function homeAdmin()
    {
        return view('inicioAdmin');
    }
    
    public function naturaleza()
    {
        return view('naturaleza');
    }
    
    public function patrimonio()
    {
        return view('patrimonio');
    }
    
    public function ocio()
    {
        return view('ocio');
    }
    
    public function tradicion()
    {
        return view('tradicion');
    }
    
    public function colaborar()
    {
         return view('colabora');
    }
    
    public function contactar()
    {
         return view('contacta');
    }
    
    public function poblaciones()
    {
         return view('poblaciones');
    }
    
    public function actividades()
    {
         return view('actividades');
    }
    
    public function login()
    {
         return view('login');
    }
    
    public function logout()
    {
         return view('logout');
    }
    
    public function registro()
    {
         return view('registro');
    }
    
    public function registrado()
    {
         return view('registrado');
    }
    
    public function colaborador()
    {
         return view('colaborador');
    }
    
    public function usuarioColaborador()
    {
         return view('usuarioColaborador');
    }
    
    public function inicioColaborador()
    {
         return view('inicioColaborador');
    }
    
    public function abanto()
    {
         return view('poblaciones.abanto');
    }
    
    public function acered()
    {
         return view('poblaciones.acered');
    }
    
    public function agon()
    {
         return view('poblaciones.agon');
    }
    
    public function borja()
    {
         return view('poblaciones.borja');
    }
    
    public function formActividad()
    {
         return view('formActividad');
    }
    
    public function formComentario()
    {
         return view('formComentario');
    }
    
    public function formImagen()
    {
         return view('formImagen');
    }
    
    public function ecceHomo()
    {
         return view('ecceHomo');
    }
    
    public function monPiedra()
    {
         return view('monPiedra');
    }
    
    public function contradanza()
    {
         return view('contradanza');
    }
    public function colegiata()
    {
         return view('colegiata');
    }
    
    public function museoVino()
    {
         return view('museoVinoLimpio');
    }
    
    public function museoVinoSinComentario()
    {
         return view('museoVinoSinComentario');
    }
    
    public function museoVinoConComentario()
    {
         return view('museoVino');
    }
    
    public function museoVinoSinFoto()
    {
         return view('museoVinoSinFoto');
    }
    
    public function musicaAntigua()
    {
         return view('musicaAntigua');
    }
    
    public function zombi()
    {
         return view('zombi');
    }
    
    public function gallocanta()
    {
         return view('gallocanta');
    }
    
    public function moncayo()
    {
         return view('moncayo');
    }
    
    public function cipotegato()
    {
         return view('cipotegato');
    }
    
    public function mascara()
    {
         return view('mascara');
    }
    
    public function castillo()
    {
         return view('mequinenza');
    }
    
    public function bañales()
    {
         return view('bañales');
    }
    
    public function editarActividad()
    {
         return view('formEditarActividad');
    }
    
    public function editarActividadOK()
    {
         return view('editarActividadOK');
    }
    
    public function editarComentario()
    {
         return view('formEditarComentario');
    }
    
    public function editarComentarioOK()
    {
         return view('editarComentarioOK');
    }
    
    public function eliminarComentario()
    {
         return view('formEliminarComentario');
    }
    
    public function eliminarComentarioOK()
    {
         return view('eliminarComentarioOK');
    }
    
    public function eliminarFoto()
    {
         return view('formEliminarFoto');
    }
    public function eliminarFotoOK()
    {
         return view('eliminarFotoOK');
    }
    
    public function eliminarActividad()
    {
         return view('formEliminarActividad');
    }
    
    public function eliminarActividadOK()
    {
         return view('eliminarActividadOK');
    }
    
    public function listadoUsuarios()
    {
         return view('listadoUsuarios');
    }
    
    public function bloqueado()
    {
         return view('bloqueado');
    }
    
    public function bloqueadoUsuario()
    {
         return view('bloqueadoUsuario');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
