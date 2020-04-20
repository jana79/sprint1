<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {
    // El nombre de la tabla es "comentarios"
    //protected $table = "comentarios";
    //El atributo $primaryKey es id() por defecto 
    public $incrementing = true;
    protected $keyType = "string";
    public $timestamps = false;
   
    public $fillable = ['id_comentario','comentario', 'fecha_comentario', 
        'autor_comentario', 'id_usuario', 'id_actividad'];
    
}
