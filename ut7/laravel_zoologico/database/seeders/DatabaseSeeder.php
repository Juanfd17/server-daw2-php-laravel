<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('revisiones')->delete();
        DB::table('animales')->delete();

        $this->call(AnimalSeeder::class);
        $this->call(RevisionesSeeder::class);
    }
}
