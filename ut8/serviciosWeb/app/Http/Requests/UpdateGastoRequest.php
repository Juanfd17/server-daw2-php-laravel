<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGastoRequest extends FormRequest{
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
                'cantidad' => 'required|min:3',
                'divisa' => 'required|min:3',
                'categoria' => 'required|min:3'
            ];
        }
        else {
            return [
                'nombre' => 'sometimes|min:3',
                'descripcion' => 'sometimes|min:3',
                'cantidad' => 'sometimes|min:3',
                'divisa' => 'sometimes|min:3',
                'categoria' => 'sometimes|min:3'
            ];
        }
    }
}
