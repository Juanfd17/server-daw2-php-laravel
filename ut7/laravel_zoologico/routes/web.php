<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RevisionControler;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [InicioController::class, 'inicio'])->name("inicio");

route::get('animales', [AnimalController::class, 'index'])->name("animales.index");

Route::get('animales/crear', [AnimalController::class, 'create'])->name("animales.create")->middleware('auth');

Route::post('animales', [AnimalController::class, 'store'])->name("animales.store");

Route::put('animales/{animal}', [AnimalController::class, 'update'])->name("animales.update");

Route::get('animales/{animal}', [AnimalController::class, 'show'])->name("animales.show");

Route::get('animales/{animal}/editar', [AnimalController::class, 'edit'])->name("animales.edit")->middleware('auth');

Route::get('revisiones/{animal}/crear', [RevisionControler::class, 'create'])->name("revisiones.create")->middleware('auth');

Route::post('revisiones/animal', [RevisionControler::class, 'store'])->name('revisiones.store');
