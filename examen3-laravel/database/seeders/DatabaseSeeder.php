<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Empresa;
use App\Models\Paquete;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        Empresa::factory(20)->create();
       $this->call(TransportistaSeeder::class);
        Paquete::factory(40)->create();
    }
}
