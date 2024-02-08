<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateGastoRequest;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateGastoRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Http\Resources\GastoCollection;
use App\Http\Resources\gastoResource;
use App\Http\Resources\GrupoResource;
use App\Http\Resources\UsuarioCollection;
use App\Http\Resources\UsuarioResource;
use App\Models\Gasto;
use App\Models\Grupo;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class GastoApiController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return GastoCollection
     */
    public function index(){
        $gastos = Gasto::with([])->paginate(3);
        return new GastoCollection($gastos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return gastoResource
     */
    public function store(CreateGastoRequest $request){
        $datos = $request->all();
        $grupo = Gasto::create($datos);

        return new GastoResource($grupo);
    }

    public function addGasto(CreateGastoRequest $request){
        $datos = $request->all();
        $datos['idUsuario'] = $request->user()->id;

        $idGrupos = $request->user()->grupos->pluck('id')->toArray();
        if (!in_array($request->idGrupo, $idGrupos) && !$request->user()->hasRole('admin')) {
            return response()->json(["mensaje" => "No puedes añadir un gasto a este grupo, no perteneces a este grupo"], 200);
        }

        $grupo = Gasto::create($datos);

        return new GastoResource($grupo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return gastoResource
     */
    public function show(Gasto $gasto, Request $request){
        $idGrupos = $request->user()->grupos->pluck('id')->toArray();
        if (!in_array($gasto->idGrupo, $idGrupos) && !$request->user()->hasRole('admin')) {
            return response()->json(["mensaje" => "No puedes ver ese gasto"], 200);
        }

        return new GastoResource($gasto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return UpdateGastoRequest
     */
    public function update(UpdateGastoRequest $request, Gasto $gasto){
        $gasto->update($request->all());
        return new UpdateGastoRequest((array)$gasto);
    }

    public function actualizar(UpdateGastoRequest $request, Gasto $gasto){
        $usuario = $request->user();
        if ($usuario->id != $gasto->idUsuario){
            return response()->json(["mensaje" => "No puedes modificar este gasto"], 200);
        }

        $gasto->update($request->all());
        return new GastoResource($gasto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Gasto $gasto){
        $gasto->delete();

        return response()->json(["mensaje" => "gasto borrado"], 200);
    }

    public function borrar(Request $request, Gasto $gasto) {
        $usuario = $request->user();

        if ($usuario->id != $gasto->idUsuario) {
            return response()->json(["mensaje" => "no puedes borrar este gasto"], 404);
        }

        $this->destroy($gasto);
        return response()->json(["mensaje" => "gasto borrado"], 200);
    }

    public function miGastos(Request $request){
        $usuario = $request->user();
        return $usuario->gastos;
    }

    public function gastos(Usuario $usuario){
        return $usuario->gastos;
    }

    public function gruposAdmin(Usuario $usuario){
        $gruposAdmin = $usuario->gruposAdmin->each(function ($grupo) use ($usuario) {
            $grupo->load(['usuarios' => function ($query) use ($usuario) {
                $query->where('id', '!=', $usuario->id);
            }]);
        });
        return GrupoResource::collection($gruposAdmin);
    }
}
