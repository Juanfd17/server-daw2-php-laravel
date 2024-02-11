<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GrupoResource extends JsonResource{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'id_usuario_admin' => $this->id_usuario_admin,
            'usuarios' => UsuarioResource::collection($this->whenLoaded('usuarios')),
            'gastos' => gastoResource::collection($this->whenLoaded('gastos')),
        ];
    }
}
