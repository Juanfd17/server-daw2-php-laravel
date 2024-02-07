<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Http\Resources\AnimalCollection;
use App\Http\Resources\AnimalResource;
use App\Http\Resources\RevisionCollection;
use App\Http\Resources\RevisionesResource;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnimalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnimalCollection
     */
    public function index(){
        $relaciones = ['cuidadores', 'revisiones'];
        $animales = Animal::with($relaciones);
        return new AnimalCollection($animales->paginate(3));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return AnimalResource
     */
    public function store(CreateUsuarioRequest $request){
        $datos = $request->all();
        $slug = Str::slug($datos['especie']);
        $datos['slug'] = $slug;

        return new AnimalResource(Animal::create($datos));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return AnimalResource
     */
    public function show(Animal $animal){
        $animal->load(['cuidadores','revisiones']);
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return UpdateAnimalRequest
     */
    public function update(UpdateAnimalRequest $request, Animal $animal){
        $animal->update($request->all());
        return new UpdateAnimalRequest((array)$animal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Animal $animal){
        $animal->delete();
        return response()->json(["mensaje" => "Animal borrado"], 200);
    }

    public function revisiones($animalId){
        $revisiones = Animal::find($animalId)->revisiones()->paginate(1);
        return new RevisionCollection($revisiones);
    }
}
