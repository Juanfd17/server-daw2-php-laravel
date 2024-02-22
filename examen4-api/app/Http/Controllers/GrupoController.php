<?php

namespace App\Http\Controllers;

use App\Http\Resources\PacienteCollection;
use App\Http\Resources\VacunaCollection;
use App\Models\Grupo;
use App\Models\Paciente;
use App\Models\Vacuna;
use Illuminate\Http\Request;
use Psy\Util\Json;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

    }

    function numeroVacunasPorGrupo(){
        $grupos = [];

        foreach (Grupo::all() as $grupo){
            $nVacunas = 0;
            foreach ($grupo->pacientes as $paciente){
                $nVacunas += $paciente->vacunas->count();
            }

            array_push($grupos, response()->json([$grupo->nombre => $nVacunas]));
        }

        return $grupos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
