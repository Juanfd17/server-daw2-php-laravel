<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\Vacuna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VacunaSeeder extends Seeder
{
    private $vacunas = [
        'Difteria, tétanos, tosferina',
        'Sarampión, rubeola, parotiditis',
        'Hepatitis B',
        'Hepatitis A',
        'Varicela',
        'Herpes zóster',
        'Virus del papiloma humano',
        'Gripe',
        'COVID-19'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->vacunas as $nombreVacuna) {
            $vacuna = new Vacuna();
            $vacuna->nombre = $nombreVacuna;
            $vacuna->slug = Str::slug($nombreVacuna);
            $vacuna->save();

            //De cada vacuna se crean 5 pacientes que la tengan
            $vacuna = Vacuna::where('nombre', $nombreVacuna)->first();
            $vacuna->pacientes()->attach(
                array_rand(
                    array_flip(
                        Paciente::where('antivacunas', false)->get()->pluck('id')->toArray()
                    ),
                    2
                )
            );



        }


    }
}
