<?php
    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\LeccionesController;
use App\Http\Controllers\LogrosController;
use App\Http\Controllers\NivelesController;
use App\Http\Controllers\ProgresoController;

Route::get('/', function () {   
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/secciones', function () {
    return view('secciones');
})->name('secciones');

Route::post('/usuario', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuario', [UsuarioController::class, 'registro'])->name('usuarios.index');


Route::get('/actividades', [ActividadesController::class, 'index'])->name('actividades.index');
Route::post('/actividades',[ActividadesController::class, 'actividades'])->name('actividades.store');

Route::get('/lecciones', [LeccionesController::class, 'index'])->name('lecciones.index');
Route::post('/lecciones', [LeccionesController::class, 'store'])->name('lecciones.store');

Route::get('/logros', [LogrosController::class, 'index'])->name('logros.index');
Route::post('/logros', [LogrosController::class, 'store'])->name('logros.store');

Route::get('/niveles', [NivelesController::class, 'index'])->name('niveles.index');
Route::post('/niveles', [NivelesController::class, 'store'])->name('niveles.store');

Route::get('/progreso', [ProgresoController::class, 'index'])->name('progreso.index');
Route::post('/progreso', [ProgresoController::class, 'store'])->name('progreso.store');