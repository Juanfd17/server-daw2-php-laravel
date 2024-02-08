<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGastoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(){
        return [
            'nombre' => 'required|min:3',
            'descripcion' => 'min:3',
            'idUsuario' => 'required|numeric|min:0',
            'idGrupo' => 'required|numeric|min:0',
            'cantidad' => 'required|numeric|min:0',
            'categoria' => 'required|numeric|min:0',
            'divisa' => 'required|numeric|min:0',
        ];
    }
}
