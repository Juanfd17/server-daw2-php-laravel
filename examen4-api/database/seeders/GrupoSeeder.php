<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    private $grupos = [
        'Sin riesgo',
        'Embarazo',
        'Inmunodeprimidos',
        'Pacientes con VIH',
        'Enfermedad renal',
        'Enfermedad cardiovascular y respiratoria',
        'Personal sanitario',
        'Tabaquismo',
        'Mayores de 65',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->grupos as $grupo) {
            Grupo::create([
                'nombre' => $grupo,
            ]);
        }
    }
}
