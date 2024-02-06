<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest{
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
                'name' => 'required|min:3',
                'lastName' => 'required|min:3',
                'email' => 'required|unique:usuarios|min:3',
                'password' => 'required|min:3'
            ];
        }
        else {
            return [
                'name' => 'sometimes|min:3',
                'lastName' => 'sometimes|min:3',
                'email' => 'sometimes|unique:usuarios|min:3',
                'password' => 'sometimes|min:3'
            ];
        }
    }
}
