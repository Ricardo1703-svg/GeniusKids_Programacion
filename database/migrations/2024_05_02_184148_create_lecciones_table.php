<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeccionesTable extends Migration
{
    public function up()
    {
        Schema::create('lecciones', function (Blueprint $table) {
            $table->increments('ID_Leccion');
            $table->string('Nombre_Leccion', 255)->nullable(false);
            $table->text('Descripcion')->nullable();
            $table->unsignedInteger('ID_Nivel')->nullable();
            $table->foreign('ID_Nivel')->references('ID_Nivel')->on('niveles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lecciones');
    }
}