<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progreso;

class ProgresoController extends Controller
{
    public function index()
    {
        $progresos = Progreso::all();
        return view('progresos.index', compact('progresos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Usuario' => 'required|integer',
            'ID_Leccion' => 'required|integer',
            'Puntuacion' => 'required|integer',
            'Fecha_Completada' => 'required|date',
        ]);

        $progreso = Progreso::create([
            'ID_Usuario' => $request->input('ID_Usuario'),
            'ID_Leccion' => $request->input('ID_Leccion'),
            'Puntuacion' => $request->input('Puntuacion'),
            'Fecha_Completada' => $request->input('Fecha_Completada'),
        ]);

        return redirect()->back()->with('success', 'Progreso registrado exitosamente.');
    }
}