<?php

namespace Database\Factories;

use App\Models\Grupo;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioGrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{

        return [
            'usuario_id'=>Usuario::all()->random()->id,
            'grupo_id'=>Grupo::all()->random()->id,
        ];
    }
}
