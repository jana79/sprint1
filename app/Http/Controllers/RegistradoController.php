<?php

namespace App\Http\Controllers;


class RegistradoController extends Controller
{
    public function home()
    {
        //vista de página principal para hacer login
        return view('inicioReg');
    }
    
    public function login()
    {
        //vista de página principal para hacer login
        return view('loginReg');
    }
    
    public function inicio()
    {
        //vista de página principal para hacer login
        return view('inicioRegOK');
    }
    public function logout()
    {
        //vista de página principal para hacer login
        return view('logoutReg');
    }
    
    public function colaborar()
    {
         return view('colaboraReg');
    }
    public function colaborador()
    {
        //vista formulario de colaborador
         return view('colaborador');
    }
    
    public function registrado()
    {
        //vista formulario de registrado
         return view('registrado');
    }
    
    public function registroOK()
    {
        //vista formulario de registrado
         return view('registroRegOK');
    }
    public function contactar()
    {
         return view('contactaReg');
    }
    
    public function respuestaContacto()
    {
         return view('respuestaContactoReg');
    }
        
    public function actividades()
    {
         return view('actividadesReg');
    }
    
    public function naturaleza()
    {
        return view('naturalezaReg');
    }
    
    public function patrimonio()
    {
        return view('patrimonioReg');
    }
    
    public function ocio()
    {
        return view('ocioReg');
    }
    
    public function tradicion()
    {
        return view('tradicionReg');
    }
    
    
    
    public function poblaciones()
    {
         return view('poblacionesReg');
    }
    
    public function abanto()
    {
         return view('poblaciones.abantoReg');
    }
    
    public function acered()
    {
         return view('poblaciones.aceredReg');
    }
    
    public function agon()
    {
         return view('poblaciones.agonReg');
    }
    
     public function borja()
    {
         return view('poblaciones.borjaReg');
    }
    
    public function formComentario()
    {
         return view('formComentarioReg');
    }
    
    public function editarComentario()
    {
         return view('formEditarComReg');
    }
    
    public function editarComentarioOK()
    {
         return view('editarComRegOK');
    }
    
    public function eliminarComentario()
    {
         return view('formEliminarComReg');
    }
    
    public function eliminarComentarioOK()
    {
         return view('eliminarComRegOK');
    }
    
    public function formImagen()
    {
         return view('formImagenReg');
    }
    
    public function eliminarFoto()
    {
         return view('formEliminarFotoReg');
    }
    
    public function eliminarFotoOK()
    {
         return view('eliminarFotoRegOK');
    }
    
    public function ecceHomo()
    {
         return view('ecceHomoReg');
    }
    
    public function ecceHomoImagen()
    {
         return view('ecceHomoImagen');
    }
    
    public function ecceHomoComentario()
    {
         return view('ecceHomoComentario');
    }
    
    public function ecceHomoComentarioEditado()
    {
         return view('ecceHomoComentarioEditado');
    }
    
    
    public function museoVino()
    {
         return view('museoVinoReg');
    }
        
    public function colegiata()
    {
         return view('colegiataReg');
    }
    
    public function gallocanta()
    {
         return view('gallocantaReg');
    }
    
    public function moncayo()
    {
         return view('moncayoReg');
    }
    
    public function zombi()
    {
         return view('zombiReg');
    }
    
    public function monPiedra()
    {
         return view('monPiedraReg');
    }
    
    public function musicaAntigua()
    {
         return view('musicaAntiguaReg');
    }
    
    public function bañales()
    {
         return view('bañalesReg');
    }
    
    public function mequinenza()
    {
         return view('mequinenzaReg');
    }
    
    public function mascara()
    {
         return view('mascaraReg');
    }
    
    public function cipotegato()
    {
         return view('cipotegatoReg');
    }
    
    public function contradanza()
    {
         return view('contradanzaReg');
    }
    
}
