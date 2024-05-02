<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $fillable = ['Nombre_Leccion', 'Descripcion', 'ID_Nivel'];

    public $timestamps = false;
}