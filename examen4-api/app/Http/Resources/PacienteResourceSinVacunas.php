<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource{
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
            'grupo_nombre' => $this->grupo->nombre,
            'anivacunas' => $this->antivacunas,
            'fechaUltimaVacuna' => $this->fechaUltimaVacuna,
        ];
    }
}
