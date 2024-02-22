<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    private $usuarios = [
        [
            'nombre' => 'Admin',
            'email' => 'admin@astursalud.es',
            'abilities' => ['gestionar-vacunas', 'gestionar-pacientes']
        ],
        [
            'nombre' => 'Gestor vacunas',
            'email' => 'vacunas@astursalud.es',
            'abilities' => ['gestionar-vacunas']
        ],
        [
            'nombre' => 'Gestor pacientes',
            'email' => 'pacientes@astursalud.es',
            'abilities' => ['gestionar-pacientes']
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->usuarios as $usuario) {
            $nuevoUsuario = new User();
            $nuevoUsuario->name = $usuario['nombre'];
            $nuevoUsuario->email = $usuario['email'];
            $nuevoUsuario->password = bcrypt('123456');
            $nuevoUsuario->save();

            $nuevoUsuario->tokens()->delete();
            $nuevoUsuario->createToken('token-api', $usuario['abilities'] );
        }
    }
}
