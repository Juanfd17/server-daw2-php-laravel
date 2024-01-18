<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cuidador;
use App\Models\Pintor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('exposiciones_cuadros')->delete();
        DB::table('exposiciones')->delete();
        DB::table('cuadros')->delete();
        DB::table('pintores')->delete();

        Pintor::factory(10)->create();
        $this->call(ExposicionesSeeder::class);
        $this->call(CueadrosSeeder::class);

    }
}
