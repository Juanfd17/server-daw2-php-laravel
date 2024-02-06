<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grupo>
 */
class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        $nombre=$this->faker->randomLetter;

        return [
            'nombre'=>$nombre,
            'id_usuario_admin'=>Usuario::all()->random()->id,
            'descripcion'=>'dasdas'
        ];
    }
}
