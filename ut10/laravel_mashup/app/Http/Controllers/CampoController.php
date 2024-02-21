<?php

namespace App\Http\Controllers;

use App\Models\Campo;
use Illuminate\Http\Request;

class CampoController extends Controller{
    function mostrarMapa(){
        return view('campo.mapa', ['campos' => Campo::all()]);
    }
}
