<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuidador>
 */
class PintorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre=$this->faker->name;
        $pais=$this->faker->country;
        $fechaNacimiento=$this->faker->date;
        return[
            'nombre'=>$nombre,
            'pais'=>$pais,
            'fechaNacimiento'=>$fechaNacimiento,
            'slug'=>Str::slug($nombre)
        ];
    }

}
