<?php

namespace Database\Seeders;

use App\Models\Exposicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExposicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */private $exposiciones = [
        [
            'nombre' => 'expo1',
        ],

        [
            'nombre' => 'expo2',
        ],

        [
            'nombre' => 'expo3',
        ],
    ];
    public function run(): void{
        foreach ($this->exposiciones as $exposicion) {
            $a = new Exposicion();
            $a->nombre = $exposicion['nombre'];
            $a->slug = Str::slug($exposicion['nombre']);

            $a->save();
        }
    }
}
