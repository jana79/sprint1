<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function home()
    {
        // Vista de página pral
        return view('inicio');
    }
    
    public function naturaleza()
    {
        //vista actividades de Naturaleza
        return view('naturaleza');
    }
    
    public function patrimonio()
    {
        //vista actividades de Patrimonio
        return view('patrimonio');
    }
    
    public function ocio()
    {
        //vista actividades de Ocio
        return view('ocio');
    }
    
    public function tradicion()
    {
        //vista actividades de Tradición
        return view('tradicion');
    }
    
    public function colaborar()
    {
        //vista sección Colabora
         return view('colabora');
    }
    
    public function contactar()
    {
        //vista sección Contacta
         return view('contacta');
    }
    
    public function poblaciones()
    {
        //vista sección Poblaciones
         return view('poblaciones');
    }
    
    public function actividades()
    {
        //vista sección Actividades
         return view('actividades');
    }
    
    public function registro()
    {
        //vista botón de Registro
         return view('registro');
    }
    
    public function registrado()
    {
        //vista formulario Usuario  Registrado
         return view('registrado');
    }
    
    public function colaborador()
    {
        //vista formulario Usuario Colaborador
         return view('colaborador');
    }
    
    public function registroOK()
    {
        //Vista registro OK para usuario colaborador y usuario registrado
         return view('registroOK');
    }
    
    public function login()
    {
        //Vista login
         return view('login');
    }
    
    //Poblaciones
     public function abanto()
    {
         //vista de Abanto
         return view('poblaciones.abanto');
    }
    
    public function acered()
    {
        //vista de Acered
         return view('poblaciones.acered');
    }
    
    public function agon()
    {
        //vista de Agón
         return view('poblaciones.agon');
    }
    
    public function borja()
    {
        //vista de Borja
         return view('poblaciones.borja');
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
         return view('museoVino');
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
    
    public function respuestaContacto()
    {
         return view('respuestaContacto');
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
