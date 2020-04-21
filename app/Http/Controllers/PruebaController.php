<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function home()
    {
        return view('inicio');
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
    
    public function abanto()
    {
         return view('abanto');
    }
    
    public function acered()
    {
         return view('acered');
    }
    
    public function agon()
    {
         return view('agon');
    }
    
    public function borja()
    {
         return view('borja');
    }
    
    public function formActividad()
    {
         return view('formActividad');
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
