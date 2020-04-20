<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model {
    // El nombre de la tabla es "actividades"
    //protected $table = "actividades";
    //El atributo $primaryKey es id() por defecto 
    public $incrementing = true;
    protected $keyType = "string";
    public $timestamps = false;
   
    public $fillable = ['id_actividad', 'portada', 'titulo', 'categoria',
        'descripcion_actividad', 'id_usuario', 'id_poblacion'];
    
}
