<?php

namespace Database\Seeders;

use App\Models\Transportista;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TransportistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t = new Transportista();
    	$t->nombre = "Andrés";
        $t->apellidos = "Trozado";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2000-01-01";
    	$t->imagen = "transportista_01.jpg";
    	$t->save();


    	$t = new Transportista();
    	$t->nombre = "Enrique";
        $t->apellidos = "Cido";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2000-07-07";
    	$t->imagen = "transportista_03.jpg";
    	$t->save();


    	$t = new Transportista();
    	$t->nombre = "Alberto";
        $t->apellidos = "Mate";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2000-09-11";
    	$t->imagen = "transportista_06.jpg";
    	$t->save();


    	$t = new Transportista();
    	$t->nombre = "Estela";
        $t->apellidos = "Gartija";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2001-05-14";
    	$t->imagen = "transportista_02.jpg";
    	$t->save();


    	$t = new Transportista();
    	$t->nombre = "Elsa";
        $t->apellidos = "Capunta";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2001-02-04";
    	$t->imagen = "transportista_04.jpg";
    	$t->save();


    	$t = new Transportista();
    	$t->nombre = "Elena";
        $t->apellidos = "Nito";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2000-11-15";
    	$t->imagen = "transportista_07.jpg";
    	$t->save();

    	$t = new Transportista();
    	$t->nombre = "Susana";
        $t->apellidos = "Torio";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2001-05-30";
    	$t->imagen = "transportista_05.jpg";
    	$t->save();


    	$t = new Transportista();
    	$t->nombre = "Paca";
        $t->apellidos = "Garte";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "2019-03-19";
    	$t->imagen = "transportista_10.jpg";
        $t->save();
        
        $t = new Transportista();
    	$t->nombre = "Aitor";
        $t->apellidos = "Tilla";
        $t->slug = Str::slug($t->nombre . "-". $t->apellidos);
    	$t->fechaPermisoConducir = "1985-05-29";
    	$t->imagen = "transportista_09.jpg";
		$t->save();
		

		$transportistas = Transportista::all();
		foreach($transportistas as $transportista)
		{
			$transportista->empresas()->attach([
				rand(1,10),
				rand(11,20)
			]);
		}

    
    }
}
