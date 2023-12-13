<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller {
    public function inicio(){
        //return redirect()->action([AnimalController::class,'index']);
        return redirect()->route('animales.index');

    }
}
