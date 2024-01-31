<?php

use App\Http\Controllers\Api\AnimalApiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/animales', [AnimalApiController::class, 'store']);
    Route::put('/animales/{animal}', [AnimalApiController::class, 'update']);
    Route::patch('/animales/{animal}', [AnimalApiController::class, 'update']);
    Route::delete('/animales/{animal}', [AnimalApiController::class, 'destroy']);
});

Route::apiResource('animales', AnimalApiController::class)->parameters(['animales' => 'animal', ])->only(['index', 'show']);
