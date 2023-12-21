<?php

namespace Database\Seeders;

use App\Models\Revision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RevisionesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $revisiones = [
        [
            'fechaRevision' => '2023-05-06',
            'descripcion' => 'todo ok',
            'animal_id' => '1'
        ],

        [
            'fechaRevision' => '2023-05-07',
            'descripcion' => 'todo me',
            'animal_id' => '1'
        ]
    ];
    public function run(){
        foreach ($this->revisiones as $revision) {
            $rev = new Revision();
            $rev->fechaRevision = $revision['fechaRevision'];
            $rev->descripcion = $revision['descripcion'];
            $rev->animal_id = $revision['animal_id'];
            $rev->save();
        }
        $this->command->info('Tabla revisiones inicializada con datos');
    }
}
