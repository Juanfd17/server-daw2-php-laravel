<?php

namespace Database\Seeders;

use App\Models\Campo;
use Illuminate\Database\Seeder;

class CampoSeeder extends Seeder{
    private $campos = [
        [
            'nombre' => 'Santiago Bernabéu',
            'ciudad' => 'Madrid',
            'equipo' => 'Real Madrid',
            'latitud' => 40.453430508959855,
            'longitud' => -3.688108377549388,
        ],
        [
            'nombre' => 'Camp Nou',
            'ciudad' => 'Barcelona',
            'equipo' => 'Barcelona',
            'latitud' => 41.3815721550841,
            'longitud' => 2.122980761559495,
        ],
        [
            'nombre' => 'Wanda Metropolitano',
            'ciudad' => 'Madrid',
            'equipo' => 'Atlético de Madrid',
            'latitud' => 40.43646075808302,
            'longitud' => -3.599793026172814,
        ],
        [
            'nombre' => 'San Mamés',
            'ciudad' => 'Bilbao',
            'equipo' => 'Athletic Club',
            'latitud' => 43.26439697850323,
            'longitud' => -2.9496849115015094,
        ],
        [
            'nombre' => 'Mestalla',
            'ciudad' => 'Valencia',
            'equipo' => 'Valencia',
            'latitud' => 39.47492716887279,
            'longitud' => -0.3580292121213948
        ],
        [
            'nombre' => 'Sánchez Pizjuán',
            'ciudad' => 'Sevilla',
            'equipo' => 'Sevilla',
            'latitud' => 37.3839152528006,
            'longitud' => -5.970538683937812
        ],
        [
            'nombre' => 'Benito Villamarín',
            'ciudad' => 'Sevilla',
            'equipo' => 'Betis',
            'latitud' => 37.356364216549686,
            'longitud' => -5.9817008650172845
        ],
        [
            'nombre' => 'Anoeta',
            'ciudad' => 'San Sebastián',
            'equipo' => 'Real Sociedad',
            'latitud' => 43.30129873150907,
            'longitud' =>  -1.9732635723821472
        ],
        [
            'nombre' => 'Balaídos',
            'ciudad' => 'Vigo',
            'equipo' => 'Celta de Vigo',
            'latitud' => 42.212150478666274,
            'longitud' => -8.739267918543558,
        ],
        [
            'nombre' => 'Coliseum Alfonso Pérez',
            'ciudad' => 'Getafe',
            'equipo' => 'Getafe',
            'latitud' => 40.32541504129358,
            'longitud' => -3.7148770939370275
        ],
        [
            'nombre' => 'Montilivi',
            'ciudad' => 'Girona',
            'equipo' => 'Girona',
            'latitud' => 41.96160524635206,
            'longitud' => 2.8283359661518164,
        ],
        [
            'nombre' => 'Los Cármenes',
            'ciudad' => 'Granada',
            'equipo' => 'Granada',
            'latitud' => 37.15273016746111,
            'longitud' => -3.5957958082508625,
        ],
        [
            'nombre' => 'La Cerámica',
            'ciudad' => 'Villarreal',
            'equipo' => 'Villarreal',
            'latitud' => 39.94437118990917,
            'longitud' => -0.10315665585807003
        ],
        [
            'nombre' => 'Mendizorroza',
            'ciudad' => 'Vitoria',
            'equipo' => 'Alavés',
            'latitud' => 42.83700285782681,
            'longitud' => -2.6878626188204455
        ],
        [
            'nombre' => 'Vallecas',
            'ciudad' => 'Madrid',
            'equipo' => 'Rayo Vallecano',
            'latitud' => 40.39186782105282,
            'longitud' => -3.6585526533016686
        ],
        [
            'nombre' => 'Son Moix',
            'ciudad' => 'Palma de Mallorca',
            'equipo' => 'Mallorca',
            'latitud' => 39.589801849424894,
            'longitud' => 2.630301559976065
        ],
        [
            'nombre' => 'Los Juegos Mediterráneos',
            'ciudad' => 'Almería',
            'equipo' => 'Almería',
            'latitud' => 36.839785580845714,
            'longitud' => -2.4354943468087913
        ],
        [
            'nombre' => 'Nuevo Mirandilla',
            'ciudad' => 'Cádiz',
            'equipo' => 'Cádiz',
            'latitud' => 36.50237200435671,
            'longitud' => -6.272794411093887
        ],
        [
            'nombre' => 'Gran Canaria',
            'ciudad' => 'Las Palmas',
            'equipo' => 'Las Palmas',
            'latitud' => 28.1000974596883,
            'longitud' => -15.456710691138234
        ],
        [
            'nombre' => 'El Sadar',
            'ciudad' => 'Pamplona',
            'equipo' => 'Osasuna',
            'latitud' => 42.796802580870256,
            'longitud' => -1.6375268386565314
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void{
        foreach ($this->campos as $campo) {
            Campo::create($campo);
        }
    }
}
