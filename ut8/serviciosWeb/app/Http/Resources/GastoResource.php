<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class gastoResource extends JsonResource{
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
            'idGrupo' => $this->idGrupo,
            'idUsuario' => $this->idUsuario,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'cantidad' => $this->cantidad,
            'categoria' => $this->categoria,
            'divisa' => $this->divisa,
        ];
    }
}
