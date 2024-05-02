<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresoTable extends Migration
{
    public function up()
    {
        Schema::create('progreso', function (Blueprint $table) {
            $table->increments('ID_Progreso');
            $table->unsignedInteger('ID_Usuario')->nullable();
            $table->unsignedInteger('ID_Leccion')->nullable();
            $table->integer('Puntuacion')->nullable(false);
            $table->date('Fecha_Completada')->nullable(false);
            $table->foreign('ID_Usuario')->references('ID_Usuario')->on('usuarios');
            $table->foreign('ID_Leccion')->references('ID_Leccion')->on('lecciones');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('progreso');
    }
}