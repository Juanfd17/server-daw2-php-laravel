<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = fake()->name();
        $antivacunas = fake()->boolean();
        $fechaUltimaVacuna = null;

        if (!$antivacunas){
            $fechaUltimaVacuna = fake()->dateTimeThisYear();
        }
        return [
            'nombre' => $nombre,
            'slug' => $nombre,
            'antivacunas' => $antivacunas,
            'grupo_id' => Grupo::all()->random()->id,
            'fechaUltimaVacuna' => $fechaUltimaVacuna,
        ];
    }
}
