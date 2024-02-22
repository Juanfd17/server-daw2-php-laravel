<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Paciente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GrupoSeeder::class);

        Paciente::factory(5)->create([
            'grupo_id' => Grupo::where('nombre', 'Sin riesgo')->first()->id
        ]);
        Paciente::factory(5)->create();

        $this->call(VacunaSeeder::class);
        $this->call(UsuarioSeeder::class);

    }
}
