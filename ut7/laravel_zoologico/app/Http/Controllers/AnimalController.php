<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller{
    public function index() {
        return view('animales.index');
    }

    public function create(){
        return view('animales.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($animal){
        return view('animales.show', compact('animal'));
    }

    public function edit($animal){
        return view('animales.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
