<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model {
    // El nombre de la tabla es "imagenes"
    //protected $table = "imagenes";
    //El atributo $primaryKey es id() por defecto 
    public $incrementing = true;
    protected $keyType = "string";
    public $timestamps = false;
   
    public $fillable = ['id_img','img', 'fecha_img', 
        'autor_img', 'id_usuario', 'id_actividad'];
    
}
