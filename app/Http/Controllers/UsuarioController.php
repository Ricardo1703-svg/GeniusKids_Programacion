<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('IntroData.usuarios.index', compact('usuarios'));

    }

    public function registro()
    {
        return view('IntroData.usuarios');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:50',
            'Edad' => 'required|integer',
            'Nivel_Educativo' => 'nullable|string|max:50',
            'ID_Nivel' => 'nullable|integer',
        ]);

        $usuario = Usuario::create([
            'Nombre' => $request->input('Nombre'),
            'Edad' => $request->input('Edad'),
            'Nivel_Educativo' => $request->input('Nivel_Educativo'),
            'ID_Nivel' => $request->input('ID_Nivel'),
        ]);

        return redirect()->back()->with('success', 'Usuario creado exitosamente.');
    }
}