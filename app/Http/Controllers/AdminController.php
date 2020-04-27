<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        //vista de página principal para hacer login como admin
        return view('inicioAdmin');
    }
    
    public function login()
    {
        //vista de formulario de login
        return view('loginAdmin');
    }
    
    public function inicio()
    {
        //vista de página principal con username y logout
        return view('inicioAdminOK');
    }
    public function listado()
    {
        //vista de listado de usuarios
        return view('listadoUsuarios');
    }
    
    public function bloqueado()
    {
        //vista confirmacion de usuario bloqueado
        return view('bloqueado');
    }
    
    public function listadoBloqueados()
    {
        //vista de listado de usuarios bloqueados (rojo)
        return view('listadoUsuariosBloqueado');
    }
    
    public function logout()
    {
        //vista de página para hacer logout
        return view('logoutAdmin');
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
