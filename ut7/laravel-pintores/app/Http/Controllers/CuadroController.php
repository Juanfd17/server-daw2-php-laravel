<?php

namespace App\Http\Controllers;

use App\Models\Cuadro;
use App\Models\Pintor;
use Illuminate\Http\Request;

class CuadroController extends Controller
{
    public function cambiarEstado(Cuadro $cuadro){
        $cuadro->disponible = !$cuadro->disponible;
        $cuadro->save();

        return redirect()->route('pintores.show', $cuadro->pintor)->with('mensaje',"Disponivilidad cambiada");
    }

    public function create(){
        return view('cuadros.create');
    }

    public function store(Request $request){
        $cuadro= new Cuadro();

        $cuadro->nombre = $request->nombre;
        $cuadro->pintor_id = $request->pintor;
        $cuadro->disponible = true;

        $cuadro->imagen = $request->img->storeAs('', $cuadro->nombre.".jpg", 'cuadros');

        $cuadro->save();

        return redirect()->route('pintores.show', $cuadro->pintor);
    }
}
