<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logro;

class LogrosController extends Controller
{
    public function index()
    {
        $logros = Logro::all();
        return view('logros.index', compact('logros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Fecha_Logro' => 'required|date',
            'ID_Actividad' => 'nullable|integer',
        ]);

        $logro = Logro::create([
            'Fecha_Logro' => $request->input('Fecha_Logro'),
            'ID_Actividad' => $request->input('ID_Actividad'),
        ]);

        return redirect()->back()->with('success', 'Logro creado exitosamente.');
    }
}