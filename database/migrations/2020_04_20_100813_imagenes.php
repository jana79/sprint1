<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('imagenes', function ($table) {
            $table->id('id_img');
            $table->string('img');
            $table->date('fecha_img');
            $table->string('autor_img');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->unsignedBigInteger('id_actividad');
            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('imagenes');
    }
}
