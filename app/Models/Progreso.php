<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    protected $fillable = ['ID_Usuario', 'ID_Leccion', 'Puntuacion', 'Fecha_Completada'];

    public $timestamps = false;
}