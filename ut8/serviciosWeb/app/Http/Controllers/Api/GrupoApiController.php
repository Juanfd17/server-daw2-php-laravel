<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateGrupoRequest;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateGrupoRequest;
use App\Http\Resources\GrupoResource;
use App\Http\Resources\UsuarioCollection;
use App\Models\Grupo;
use App\Models\Usuario;
use Illuminate\Http\Request;

class GrupoApiController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(){
        $grupos = Grupo::with([])->paginate(3);
        return $grupos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return GrupoResource
     */
    public function store(CreateGrupoRequest $request){
        $datos = $request->all();
        $grupo = Grupo::create($datos);
        $id_usuario_admin = $grupo->id_usuario_admin;
        $grupo->usuarios()->attach($id_usuario_admin);
        return new GrupoResource($grupo);
    }

    public function addGrupo(CreateGrupoRequest $request){
        $datos = $request->all();
        $datos['id_usuario_admin'] = $request->user()->id;
        $grupo = Grupo::create($datos);
        $id_usuario_admin = $grupo->id_usuario_admin;
        $grupo->usuarios()->attach($id_usuario_admin);
        return new GrupoResource($grupo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return GrupoResource
     */
    public function show(Grupo $grupo){
        $grupo->load(['usuarios']);
        return new GrupoResource($grupo);
    }

    public function miGrupo(Request $request, Grupo $grupo){
        $usuario = $request->user();

        if ($grupo->usuarios->contains($usuario->id)) {
            $grupo->load(['usuarios']);
            return new GrupoResource($grupo);
        } else {
            return response()->json(["mensaje" => "el usuario no está en el grupo"], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return UpdateGrupoRequest
     */
    public function update(UpdateGrupoRequest $request, Grupo $grupo){
        if ($grupo->id_usuario_admin != $request->user()->id && !$request->user()->hasRole('admin')) {
            return response()->json(["mensaje" => "No eres el administrador del grupo"], 200);
        }

        $grupo->update($request->all());
        return new UpdateGrupoRequest((array)$grupo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, Grupo $grupo){
        if ($grupo->id_usuario_admin != $request->user()->id && !$request->user()->hasRole('admin')) {
            return response()->json(["mensaje" => "No eres el administrador del grupo"], 200);
        }

        $grupo->usuarios()->detach();
        $grupo->delete();
        return response()->json(["mensaje" => "Grupo borrado"], 200);
    }

    public function addUser(Request $request, Grupo $grupo, Usuario $usuario){
        if ($grupo->id_usuario_admin != $request->user()->id && !$request->user()->hasRole('admin')) {
            return response()->json(["mensaje" => "No eres el administrador del grupo"], 200);
        }

        if (!$grupo->usuarios->contains($usuario->id)) {
            $grupo->usuarios()->syncWithoutDetaching($usuario->id);
            return response()->json(["mensaje" => "el usuario se ha añadido al grupo"], 200);
        }

        return response()->json(["mensaje" => "el usuario ya esta dentro del grupo"], 200);
    }

    public function delUser(Request $request, Grupo $grupo, Usuario $usuario){
        if ($grupo->id_usuario_admin != $request->user()->id && !$request->user()->hasRole('admin')) {
            return response()->json(["mensaje" => "No eres el administrador del grupo"], 200);
        }

        if ($grupo->usuarios->contains($usuario->id)) {
            $grupo->usuarios()->detach($usuario->id);
            return response()->json(["mensaje" => "el usuario se ha eliminado del grupo"], 200);
        }

        return response()->json(["mensaje" => "el usuario no está en el grupo"], 200);
    }
}
