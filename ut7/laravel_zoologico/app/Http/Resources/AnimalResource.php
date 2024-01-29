<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){
        return [
            'especie' => $this->especie,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'fechaNacimieto' => $this->fechaNacimiento,
            'imagen' => $host = $request->getSchemeAndHttpHost(). '/assets/img/animales/' . $this->imagen,
            'alimentacion' => $this->alimentacion,
            'descripcion' => $this->descripcion,
            'cuidadores' => CuidadorResource::collection($this->whenLoaded('cuidadores')),
        ];
    }
}
