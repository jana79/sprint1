<?php

namespace App\Http\Controllers;


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

}
