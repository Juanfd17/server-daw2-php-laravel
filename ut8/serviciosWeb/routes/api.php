<?php

use App\Http\Controllers\Api\GrupoApiController;
use App\Http\Controllers\Api\UsuarioApiController;
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

Route::middleware(['auth:sanctum', 'abilities:user'])->group(function () {
    Route::get('usuarios/miPerfil', [UsuarioApiController::class, 'miPerfil']);
    Route::get('grupos/{grupo}/ver', [GrupoApiController::class, 'miGrupo']);
    Route::post('grupos/add', [GrupoApiController::class, 'addGrupo']);
    Route::post('grupos/add/{grupo}/{usuario}', [GrupoApiController::class, 'addUser']);
    Route::post('grupos/del/{grupo}/{usuario}', [GrupoApiController::class, 'delUser']);
    Route::delete('grupos/{grupo}/borrar', [GrupoApiController::class, 'destroy']);
    Route::delete('usuarios/borrar', [UsuarioApiController::class, 'borrar']);
    Route::patch('usuarios/actualizar', [UsuarioApiController::class, 'actualizar']);
    Route::patch('grupos/{grupo}/actualizar', [GrupoApiController::class, 'update']);
});

Route::middleware(['auth:sanctum', 'abilities:admin'])->group(function () {
    Route::get('usuarios/{usuario}/gruposAdmin', [UsuarioApiController::class, 'gruposAdmin']);

    Route::post('grupos/{grupo}/add/{usuario}', [GrupoApiController::class, 'addUser']);
    Route::post('grupos/{grupo}/del/{usuario}', [GrupoApiController::class, 'delUser']);

    Route::apiResource('usuarios', UsuarioApiController::class)->parameters(['usuarios' => 'usuario']);
    Route::apiResource('grupos', GrupoApiController::class)->parameters(['grupos' => 'grupo']);
});

Route::post('usuarios/register', [UsuarioApiController::class, 'store']);
