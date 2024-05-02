<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelesController extends Controller
{
    public function index()
    {
        $niveles = Nivel::all();
        return view('niveles.index', compact('niveles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreNivel' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|string|max:255',
        ]);

        $nivel = Nivel::create([
            'nombreNivel' => $request->input('nombreNivel'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
        ]);

        return redirect()->back()->with('success', 'Nivel creado exitosamente.');
    }
}