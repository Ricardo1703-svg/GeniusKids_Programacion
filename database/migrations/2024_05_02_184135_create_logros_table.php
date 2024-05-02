<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogrosTable extends Migration
{
    public function up()
    {
        Schema::create('logros', function (Blueprint $table) {
            $table->increments('ID_Logro');
            $table->date('Fecha_Logro')->nullable(false);
            $table->unsignedInteger('ID_Actividad')->nullable();
            $table->foreign('ID_Actividad')->references('ID_Actividad')->on('actividades');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('logros');
    }
}