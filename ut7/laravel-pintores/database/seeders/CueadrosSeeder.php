<?php

namespace Database\Seeders;

use App\Models\Cuadro;
use App\Models\Exposicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CueadrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $cuadros = [
        [
            'nombre' => 'cuadro1',
            'imagen' => 'img1.png',
            'disponible' => true,
            'pintor_id' => 1,
            'exposiciones' => [1,2]
        ],

        [
            'nombre' => 'cuadro2',
            'imagen' => 'img2.png',
            'disponible' => true,
            'pintor_id' => 1,
            'exposiciones' => [2,3]
        ],

        [
            'nombre' => 'cuadro3',
            'imagen' => 'img3.png',
            'disponible' => true,
            'pintor_id' => 1,
            'exposiciones' => [1,3]
        ],

    ];
    public function run(): void{
        foreach ($this->cuadros as $cuadro) {
            $a = new Cuadro();
            $a->nombre = $cuadro['nombre'];
            $a->imagen = $cuadro['imagen'];
            $a->disponible = $cuadro['disponible'];
            $a->pintor_id = $cuadro['pintor_id'];
            $a->save();

            $a->exposiciones()->attach(
                $cuadro['exposiciones']
            );
        }

    }
}
