<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gasto;
use App\Models\Grupo;
use App\Models\Usuario;
use Database\Factories\UsuarioGrupoFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        DB::table('usuarios_grupos')->delete();
        DB::table('grupos')->delete();
        DB::table('usuarios')->delete();

        $adminRol  = Role::create(['name' => 'admin']);
        $userRol   = Role::create(['name' => 'user']);

        $user = Usuario::factory()->create(['name' => 'juan', 'email' => 'juanfd17@educastur.es', 'password' => bcrypt("6007")]);
        $user->assignRole($adminRol);
        $user->assignRole($userRol);

        $usuarios = Usuario::factory(400)->create(['password' => bcrypt("12345678")]);

        foreach ($usuarios as $usuario) {
            $usuario->assignRole($userRol);
        }

        $grupos = Grupo::factory(100)->create();

        $grupos->each(function ($grupo) use ($usuarios, $user) {
            $grupo->usuarios()->attach($grupo->id_usuario_admin);

            $grupo->usuarios()->syncWithoutDetaching(
                $usuarios->random(rand(1, 4))->pluck('id')->toArray()
            );

            for ($i = 0; $i < 10; $i++) {
                $gasto = random_int(1, 100);
                Gasto::factory()->create(['idGrupo' => $grupo->id, 'idUsuario' => $grupo->usuarios()->get()->random()->id, 'nombre' => 'gasto ' . $i, 'descripcion' => 'descripcion gasto ' . $i, 'cantidad' => $gasto, 'categoria' => '1', 'divisa' => '1']);
            }
        });
    }
}
