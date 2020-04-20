<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Actividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {

        Schema::create('actividades', function ($table) {
            $table->id('id_actividad');
            $table->string('portada');
            $table->string('titulo');
            $table->string('categoria');
            $table->text('descripcion_actividad');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->unsignedBigInteger('id_poblacion');
            $table->foreign('id_poblacion')->references('id_poblacion')->on('poblaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('actividades');
    }
}
