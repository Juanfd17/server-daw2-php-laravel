<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Http\Resources\GrupoResource;
use App\Http\Resources\UsuarioCollection;
use App\Http\Resources\UsuarioResource;
use App\Models\Grupo;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UsuarioApiController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return UsuarioCollection
     */
    public function index(){
        $usuarios = Usuario::with(['grupos'])->paginate(3);
        return new UsuarioCollection($usuarios);
    }

    public function miPerfil(Request $request){
        $usuario = $request->user();
        $usuario->load(['grupos']);
        return new UsuarioResource($usuario);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return UsuarioResource
     */
    public function store(CreateUsuarioRequest $request){
        $datos = $request->all();

        return new UsuarioResource(Usuario::create($datos));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return UsuarioResource
     */
    public function show(Usuario $usuario){
        $usuario->load(['grupos']);
        return new UsuarioResource($usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return UpdateUsuarioRequest
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario){
        $usuario->update($request->all());
        return new UpdateUsuarioRequest((array)$usuario);
    }

    public function actualizar(UpdateUsuarioRequest $request){
        $usuario = $request->user();
        $usuario->update($request->all());
        return new UsuarioResource($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Usuario $usuario){
        $gruposAdmin = $usuario->gruposAdmin;

        foreach ($gruposAdmin as $grupo) {
            $miembros = $grupo->usuarios;
            if ($miembros->count() >= 1) {
                $nuevoAdmin = $miembros->first(function ($miembro) use ($usuario) {
                    return $miembro->id != $usuario->id;
                });
                if ($nuevoAdmin) {
                    $grupo->id_usuario_admin = $nuevoAdmin->id;
                    $grupo->save();
                }
            } else {
                $grupo->usuarios()->detach();
                $grupo->delete();
            }
        }

        $usuario->gastos()->delete();
        $usuario->grupos()->detach();

        $usuario->delete();

        return response()->json(["mensaje" => "Usuario borrado"], 200);
    }

    public function borrar(Request $request) {
        $usuario = $request->user();

        if ($usuario) {
            $this->destroy($usuario);
            return response()->json(["mensaje" => "Usuario borrado"], 200);
        } else {
            return response()->json(["mensaje" => "Usuario no encontrado"], 404);
        }
    }

    public function miGastos(Request $request){
        $usuario = $request->user();
        return $usuario->gastos;
    }

    public function gastos(Usuario $usuario){
        return $usuario->gastos;
    }

    public function gastosUsuario(Usuario $usuario){
        return $usuario->gastos;
    }

    public function gruposAdmin(Usuario $usuario){
        $gruposAdmin = Grupo::where('id_usuario_admin', $usuario->id)->get();
        return GrupoResource::collection($gruposAdmin);
    }
}
