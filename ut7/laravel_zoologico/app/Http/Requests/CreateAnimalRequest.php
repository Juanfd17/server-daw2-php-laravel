<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnimalRequest extends FormRequest
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
        return [
            'especie' => 'required|unique:animales|min:3',
            'peso' => 'required|numeric|min:0',
            'altura' => 'required|numeric|min:0',
            'fechaNacimiento' => 'required|date|before_or_equal:today',
        ];
    }
}
