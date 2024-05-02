<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['Nombre', 'Edad', 'Nivel_Educativo', 'ID_Nivel'];
    public $timestamps = false;
}