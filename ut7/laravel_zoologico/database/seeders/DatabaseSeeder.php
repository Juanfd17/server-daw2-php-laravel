<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table('revisiones')->delete();
        DB::table('animales')->delete();

        $this->call(AnimalSeeder::class);
        $this->call(RevisionesSeeder::class);

        Role::create(['name' => 'admin']);

        DB::table('users')->delete();
        User::factory(5)->create();
        $userAdmin = User::factory()->create(['name' => 'juan', 'email' => 'juanfd17@educastur.es', 'password' => bcrypt("6007")]);
        $userAdmin->assignRole('admin');
    }
}
