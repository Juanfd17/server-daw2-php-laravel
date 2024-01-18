<?php

use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\TransportistasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return redirect()->route('transportistas.index');});
Route::get('transportistas', [TransportistasController::class, 'index'])->name("transportistas.index");
Route::get('transportistas/{transportista}', [TransportistasController::class, 'show'])->name("transportistas.show");
Route::get('transportistas/{transportista}/entregar', [TransportistasController::class, 'entregar'])->name("transportista.entregar");
Route::get('transportistas/{transportista}/noEntregar', [TransportistasController::class, 'noEntregar'])->name("transportista.noEntregar");
Route::get('paquetes/crear', [PaqueteController::class, 'create'])->name("paquete.create");
Route::post('paquetes', [PaqueteController::class, 'store'])->name("paquetes.store");
