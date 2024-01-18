<?php

namespace Database\Factories;

use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;
use PhpParser\Node\Expr\Cast\Int_;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paquete>
 */
class PaqueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        $direccionEntrega=$this->faker->address;

        return[
            'direccionEntrega'=>$direccionEntrega,
            'entregado'=>false,
            'imagen'=>'paquete_por_defecto.jpg',
            'transportista_id'=>Transportista::all()->random()->id
        ];
    }
}
