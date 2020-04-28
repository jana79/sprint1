<?php

namespace App\Http\Controllers;


class ColaboradorController extends Controller
{
    public function home()
    {
        //vista de página principal para hacer login
        return view('inicioCol');
    }
    
    public function inicioBloqueado()
    {
        //vista de página principal
        return view('inicioBloqueado');
    }
    
    public function login()
    {
        //vista de página login 
        return view('loginCol');
    }
    
    public function loginBloqueado()
    {
        //vista de página principal para hacer login
        return view('loginBloqueado');
    }
    
    public function bloqueadoUsuario()
    {
        //vista de aviso de bloquedo de usuario
        return view('bloqueadoUsuario');
    }
    
    public function inicio()
    {
        //vista de página principal como colaborador
        return view('inicioColOK');
    }
    public function logout()
    {
        //vista de logout
        return view('logout');
    }
    
    public function colaborar()
    {
        //vista sección Colabora
         return view('colaboraUsuario');
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
         return view('registroColOK');
    }
    
    public function contactar()
    {
        //vista sección Contacta
         return view('contactaUsuario');
    }
    
    public function respuestaContacto()
    {
        //vista tras enviar formulario de contacto
         return view('respuestaContactoUsuario');
    }
        
    public function actividades()
    {
        //vista sección Actividades
         return view('actividadesUsuario');
    }
    
    public function naturaleza()
    {
        //vista categoría Naturaleza dentro de Actividades
        return view('naturalezaUsuario');
    }
    
    public function patrimonio()
    {
        //vista categoría Patrimonio dentro de Actividades
        return view('patrimonioUsuario');
    }
    
    public function ocio()
    {
        //vista categoría Ocio dentro de Actividades
        return view('ocioUsuario');
    }
    
    public function tradicion()
    {
        //vista categoría Tradición dentro de Actividades
        return view('tradicionUsuario');
    }
    
    
    
    public function poblaciones()
    {
        //vista sección Poblaciones
         return view('poblacionesUsuario');
    }
    
    public function abanto()
    {
        //vista población Abanto
         return view('poblaciones.abantoColaborador');
    }
    
    public function acered()
    {
        //vista población Acered
         return view('poblaciones.aceredColaborador');
    }
    
    public function agon()
    {
        //vista población Agón
         return view('poblaciones.agonColaborador');
    }
    
    public function borjaSinMuseo()
    {
        //vista población Borja sin actividad
         return view('poblaciones.borjaSinMuseo');
    }
    
    public function borjaConMuseo()
    {
        //vista población Borja con actiidad
         return view('poblaciones.borjaColaborador');
    }
    
    public function formActividad()
    {
        //vista de formulario para añadir actividad
         return view('formActividad');
    }
    
    public function editarActividad()
    {
        //vista de formulario para editar actividad
         return view('formEditarActividad');
    }
    
    public function editarActividadOK()
    {
        //vista de formulario de confirmación de edición de actividad
         return view('editarActividadOK');
    }
    
    public function eliminarActividad()
    {
        //vista de formulario para eliminar actividad
         return view('formEliminarActividad');
    }
    
    public function eliminarActividadOK()
    {
        //vista de confirmación de eliminación de actividad
         return view('eliminarActividadOK');
    }
    
    
    public function formComentario()
    {
        //vista de formulario para añadir comentario
         return view('formComentario');
    }
    
    public function editarComentario()
    {
        //vista de formulario para editar comentario
         return view('formEditarComentario');
    }
    
    public function editarComentarioOK()
    {
        //vista de confirmación de edición de comentario
         return view('editarComentarioOK');
    }
    
    public function eliminarComentario()
    {
        //vista de formulario para eliminar comentario
         return view('formEliminarComentario');
    }
    
    public function eliminarComentarioOK()
    {
        //vista de confirmación de eliminación de comentario
         return view('eliminarComentarioOK');
    }
    
    public function formImagen()
    {
        //vista de formulario para añadir imagen
         return view('formImagen');
    }
    
    public function eliminarFoto()
    {
        //vista de formulario para eliminar imagen
         return view('formEliminarFoto');
    }
    
    public function eliminarFotoOK()
    {
        //vista de confirmación de eliminación de imagen
         return view('eliminarFotoOK');
    }
    
    public function ecceHomo()
    {
        //vista de actividad Ecce Homo
         return view('ecceHomoUsuario');
    }
    
    
    public function museoVino()
    {
        //vista de actividad Museo del vino
         return view('museoVinoUsuario');
    }
    
    public function museoVinoImagen()
    {
        //vista de actividad Museo del vino con imagen
         return view('museoVinoConFoto');
    }
    
    public function museoVinoComentario()
    {
        //vista de actividad Museo del vino con comentario
         return view('museoVinoComentario');
    }
    
    public function museoVinoComentarioEditado()
    {
        //vista de actividad Museo del vino con comentario editado
         return view('museoVinoComentarioEditado');
    }
    
    public function colegiata()
    {
        //vista de actividad Colegiata de Santa María
         return view('colegiataUsuario');
    }
    
    public function gallocanta()
    {
        //vista de actividad Laguna de Gallocanta
         return view('gallocantaUsuario');
    }
    
    public function moncayo()
    {
        //vista de actividad Ruta por el Moncayo
         return view('moncayoUsuario');
    }
    
    public function zombi()
    {
        //vista de actividad Survival Zombie
         return view('zombiUsuario');
    }
    
    public function monPiedra()
    {
        //vista de actividad Monasterio de Piedra
         return view('monPiedraUsuario');
    }
    
    public function musicaAntigua()
    {
        //vista de actividad Música Antigua
         return view('musicaAntiguaUsuario');
    }
    
    public function bañales()
    {
        //vista de actividad Los Bañales
         return view('bañalesUsuario');
    }
    
    public function mequinenza()
    {
        //vista de actividad Castillo de Mequinenza
         return view('mequinenzaUsuario');
    }
    
    public function mascara()
    {
        //vista de actividad Máscara de Ateca
         return view('mascaraUsuario');
    }
    
    public function cipotegato()
    {
        //vista de actividad Cipotegato
         return view('cipotegatoUsuario');
    }
    
    public function contradanza()
    {
        //vista de actividad La contradanza de Cetina
         return view('contradanzaUsuario');
    }
    
    public function sinMuseo()
    {
        //vista de población Borja sin actividad
         return view('poblaciones.borjaSinMuseo');
    }
      
}
