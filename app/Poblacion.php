<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model {
    // El nombre de la tabla es "poblaciones"
    //protected $table = "poblaciones";
    //El atributo $primaryKey es id() por defecto 
    public $incrementing = true;
    protected $keyType = "string";
    public $timestamps = false;
   
    public $fillable = ['id_poblacion','nombre_poblacion','descripcion_poblacion',
         'imagen_poblacion'];
    
}
