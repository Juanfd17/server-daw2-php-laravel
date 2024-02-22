<?php

use App\Http\Controllers\GrupoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/vacunas', [VacunaController::class, 'index'])->name('vacunas');
Route::get('/vacunas/{siNo}', [PacienteController::class, 'antivacunasONo'])->name('vacunasONo');
Route::get('/vacunas-por-grupo', [GrupoController::class, 'numeroVacunasPorGrupo'])->name('vacunas-por-grupo');
Route::put('/vacunar', [PacienteController::class, 'vacunar'])->name('vacunar');
Route::put('/actualizar-fechavacuna', [PacienteController::class, 'actualizarFechaVacuna'])->name('actualizar-fechavacuna');

Route::delete('/borrar-novacunados', [PacienteController::class, 'borrarNovacunados']);

Route::get('/token', [ProfileController::class, 'crearToken'])->name('token');
