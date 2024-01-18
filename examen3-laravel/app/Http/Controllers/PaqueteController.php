<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Transportista;
use Illuminate\Http\Request;

class PaqueteController extends Controller{
    public function store(Request $request){
        $paquete = new Paquete();

        $paquete->direccionEntrega = $request->direccionEntrega;
        $paquete->entregado = false;
        $paquete->imagen = $request->imagen;
        $paquete->transportista_id = $request->transportista_id;
        $paquete->imagen = $request->imagen->storeAs('', $paquete->id.".jpg", 'paquetes');
        $paquete->save();

        return redirect()->route('transportistas.show', $paquete->transportista);
    }

    public function create(){
        return view('paquetes.create');
    }
}
