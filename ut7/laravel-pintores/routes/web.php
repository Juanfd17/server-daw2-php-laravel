<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\PintorController;
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

Route::get('/', [InicioController::class, 'inicio'])->name("inicio");
Route::get('pintores', [PintorController::class, 'index'])->name("pintores");

Route::get('pintores/{pintor}', [PintorController::class, 'show'])->name("pintores.show");
