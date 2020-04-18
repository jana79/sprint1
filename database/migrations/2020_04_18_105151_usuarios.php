<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function ($table) {
            $table->id('id_usuario');
            $table->string('nombre');
            $table->string('apeliidos');
            $table->string('mail')->unique();
            $table->string('nom_usuario')->unique();
            $table->string('password');
            $table->boolean('colaborador');
            $table->boolean('empresa');
            $table->boolean('admin');
            $table->boolean('bloqueado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
