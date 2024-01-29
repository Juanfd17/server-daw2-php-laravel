<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $metodo = $this->method();
        if($metodo == 'PUT')
        {
            return [
                'especie' => 'required|unique:animales|min:3',
                'peso' => 'required|numeric|min:0',
                'altura' => 'required|numeric|min:0',
                'fechaNacimiento' => 'required|date|before_or_equal:today',
            ];
        }
        else
        {
            return [
                'especie' => 'sometimes|unique:animales|min:3',
                'peso' => 'sometimes|numeric|min:0',
                'altura' => 'sometimes|numeric|min:0',
                'fechaNacimiento' => 'sometimes|date|before_or_equal:today',
            ];
        }
    }
}
