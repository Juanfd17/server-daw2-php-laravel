<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnimalController extends Controller{
    public function index() {
        return view('animales.index', ['animales' => Animal::all()]);
    }

    public function create(){
        return view('animales.create');
    }

    public function store(Request $request){

    }

    public function show(Animal $animal){
        return view('animales.show', ['animal' => $animal]);
    }

    public function edit(Animal $animal){
        return view('animales.edit', ['animal' => $animal]);
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }

}
