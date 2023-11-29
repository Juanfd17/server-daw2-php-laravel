<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "hola mundo";
});


route::get('animales', function (){
    return "aqui se mostraran los animales";
});

Route::get('animales/{id}', function ($id){
    return "Esta sera la ruta del animal $id";
});

Route::post('crear', function (){
    return "";
});
