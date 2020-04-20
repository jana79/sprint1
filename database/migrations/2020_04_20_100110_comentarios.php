<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('comentarios', function ($table) {
            $table->id('id_comentario');
            $table->text('comentario');
            $table->date('fecha_comentario');
            $table->string('autor_comentario');
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
        Schema::dropIfExists('comentarios');
    }
}
