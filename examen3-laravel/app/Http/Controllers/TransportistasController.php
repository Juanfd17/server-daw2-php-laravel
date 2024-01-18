<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistasController extends Controller{
    public function index() {
        return view('transportista.index', ['transportistas' => Transportista::all()]);
    }

    public function show(Transportista $transportista){
        return view('transportista.show', ['transportista' => $transportista]);
    }

    public function entregar(Transportista $transportista){
        foreach ($transportista->paquetes as $paquete){
            $paquete->entregado = true;
            $paquete->save();

        }

        return redirect()->route('transportistas.show', $transportista)->with('mensaje',"Se han entregado todos los paquetes");
    }

    public function noEntregar(Transportista $transportista){
        foreach ($transportista->paquetes as $paquete){
            $paquete->entregado = false;
            $paquete->save();
        }

        return redirect()->route('transportistas.show', $transportista)->with('mensaje',"Se han marcado como no entregado todos los paquetes");
    }
}
