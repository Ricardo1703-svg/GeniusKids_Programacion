<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadesController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Tipo_Actividad' => 'required|string|max:50',
            'Descripcion' => 'nullable|string',
            'Edad_Recomendada' => 'required|integer',
        ]);

        $actividad = Actividad::create([
            'Tipo_Actividad' => $request->input('Tipo_Actividad'),
            'Descripcion' => $request->input('Descripcion'),
            'Edad_Recomendada' => $request->input('Edad_Recomendada'),
        ]);

        return redirect()->back()->with('success', 'Actividad creada exitosamente.');
    }
}