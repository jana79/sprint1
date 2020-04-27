<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function home()
    {
        //vista de página principal para hacer login
        return view('inicioCol');
    }
    
    public function inicioBloqueado()
    {
        //vista de página principal para hacer login
        return view('inicioBloqueado');
    }
    
    public function login()
    {
        //vista de página principal para hacer login
        return view('login');
    }
    
    public function loginBloqueado()
    {
        //vista de página principal para hacer login
        return view('loginBloqueado');
    }
    
    public function bloqueadoUsuario()
    {
        //vista de página principal para hacer login
        return view('bloqueadoUsuario');
    }
    
    public function inicio()
    {
        //vista de página principal para hacer login
        return view('inicioColOK');
    }
    public function logout()
    {
        //vista de página principal para hacer login
        return view('logout');
    }
    
    public function colaborar()
    {
         return view('colaboraUsuario');
    }
    
    public function contactar()
    {
         return view('contactaUsuario');
    }
    
    public function respuestaContacto()
    {
         return view('respuestaContactoUsuario');
    }
        
    public function actividades()
    {
         return view('actividadesUsuario');
    }
    
    public function naturaleza()
    {
        return view('naturalezaUsuario');
    }
    
    public function patrimonio()
    {
        return view('patrimonioUsuario');
    }
    
    public function ocio()
    {
        return view('ocioUsuario');
    }
    
    public function tradicion()
    {
        return view('tradicionUsuario');
    }
    
    
    
    public function poblaciones()
    {
         return view('poblacionesUsuario');
    }
    
    public function abanto()
    {
         return view('poblaciones.abantoColaborador');
    }
    
    public function acered()
    {
         return view('poblaciones.aceredColaborador');
    }
    
    public function agon()
    {
         return view('poblaciones.agonColaborador');
    }
    
    public function borjaSinMuseo()
    {
         return view('poblaciones.borjaSinMuseo');
    }
    
    public function borjaConMuseo()
    {
         return view('poblaciones.borjaColaborador');
    }
    
    public function formActividad()
    {
         return view('formActividad');
    }
    
    public function editarActividad()
    {
         return view('formEditarActividad');
    }
    
    public function editarActividadOK()
    {
         return view('editarActividadOK');
    }
    
    public function eliminarActividad()
    {
         return view('formEliminarActividad');
    }
    
    public function eliminarActividadOK()
    {
         return view('eliminarActividadOK');
    }
    
    
    public function formComentario()
    {
         return view('formComentario');
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
    
    public function formImagen()
    {
         return view('formImagen');
    }
    
    public function eliminarFoto()
    {
         return view('formEliminarFoto');
    }
    
    public function eliminarFotoOK()
    {
         return view('eliminarFotoOK');
    }
    
    public function ecceHomo()
    {
         return view('ecceHomoUsuario');
    }
    
    
    public function museoVino()
    {
         return view('museoVinoUsuario');
    }
    
    public function museoVinoImagen()
    {
         return view('museoVinoConFoto');
    }
    
    public function museoVinoComentario()
    {
         return view('museoVinoComentario');
    }
    
    public function museoVinoComentarioEditado()
    {
         return view('museoVinoComentarioEditado');
    }
    
    public function colegiata()
    {
         return view('colegiataUsuario');
    }
    
    public function gallocanta()
    {
         return view('gallocantaUsuario');
    }
    
    public function moncayo()
    {
         return view('moncayoUsuario');
    }
    
    public function zombi()
    {
         return view('zombiUsuario');
    }
    
    public function monPiedra()
    {
         return view('monPiedraUsuario');
    }
    
    public function musicaAntigua()
    {
         return view('musicaAntiguaUsuario');
    }
    
    public function bañales()
    {
         return view('bañalesUsuario');
    }
    
    public function mequinenza()
    {
         return view('mequinenzaUsuario');
    }
    
    public function mascara()
    {
         return view('mascaraUsuario');
    }
    
    public function cipotegato()
    {
         return view('cipotegatoUsuario');
    }
    
    public function contradanza()
    {
         return view('contradanzaUsuario');
    }
    
    public function sinMuseo()
    {
         return view('poblaciones.borjaSinMuseo');
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
