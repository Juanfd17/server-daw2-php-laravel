<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        $nombre=$this->faker->name;
        $apellidos=$this->faker->lastName;
        $correo=$this->faker->email;
        $contrasenia=$this->faker->password;

        return [
            'name'=>$nombre,
            'lastName'=>$apellidos,
            'email'=>$correo,
            'password'=>$contrasenia
        ];
    }
}
