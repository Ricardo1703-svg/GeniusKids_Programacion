<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('ID_Usuario');
            $table->string('Nombre', 50)->nullable(false);
            $table->integer('Edad')->nullable(false);
            $table->string('Nivel_Educativo', 50)->nullable();
            $table->unsignedInteger('ID_Nivel')->nullable();
            $table->foreign('ID_Nivel')->references('ID_Nivel')->on('niveles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}