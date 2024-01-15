<?php

namespace App\Http\Controllers;

use App\Models\Pintor;
use Illuminate\Http\Request;

class PintorController extends Controller
{
    public function index() {
        return view('pintores.index', ['pintores' => Pintor::all()]);
    }

    public function show(Pintor $pintor){
        return view('pintores.show', ['pintor' => $pintor]);
    }
}
