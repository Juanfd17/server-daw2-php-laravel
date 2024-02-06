<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGrupoRequest extends FormRequest{
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
        $metodo = $this->method();
        if($metodo == 'PUT') {
            return [
                'nombre' => 'required|min:3',
                'descripcion' => 'required|min:3',
                'id_usuario_admin' => 'required|min:0'
            ];
        }
        else {
            return [
                'nombre' => 'sometimes|min:3',
                'descripcion' => 'sometimes|min:3',
                'id_usuario_admin' => 'sometimes|min:0'
            ];
        }
    }
}
