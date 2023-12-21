<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnimalController extends Controller{
    public function index() {
        return view('animales.index', ['animales' => Animal::all()]);
    }

    public function create(){
        return view('animales.create');
    }

    public function store(Request $request){
        $animal= new Animal();

        $animal->especie = $request->especie;
        $animal->slug = Str::slug($request->especie);
        $animal->peso = $request->peso;
        $animal->altura = $request->altura;
        $animal->fechaNacimiento = $request->fechaN;
        $animal->alimentacion = $request->alimentacion;
        $animal->descripcion = $request->descripcion;

        $animal->imagen = $request->img->storeAs('', $animal->slug.".jpg", 'animales');

        $animal->save();

        return view('animales.show', ['animal' => $animal]);
    }

    public function show(Animal $animal){
        return view('animales.show', ['animal' => $animal]);
    }

    public function edit(Animal $animal){
        return view('animales.edit', ['animal' => $animal]);
    }

    public function update(Request $request){
        $animal = Animal::where('slug', $request->slug)->first();

        $animal->especie = $request->especie;
        $animal->slug = Str::slug($request->especie);
        $animal->peso = $request->peso;
        $animal->altura = $request->altura;
        $animal->fechaNacimiento = $request->fechaN;
        $animal->alimentacion = $request->alimentacion;
        $animal->descripcion = $request->descripcion;

        if ($request->img != null) {
            $animal->imagen = $request->img->storeAs('', $animal->slug.".jpg", 'animales');
        }

        $animal->save();

        return view('animales.show', ['animal' => $animal]);
    }

    public function destroy($id){
        //
    }

}
