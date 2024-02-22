<?php

namespace App\Http\Controllers;

use App\Http\Resources\PacienteCollection;
use App\Http\Resources\VacunaCollection;
use App\Models\Paciente;
use App\Models\User;
use App\Models\Vacuna;
use Faker\Core\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

    }

    public function antivacunasONo(Request $request){
        if ($request->siNo == "si"){
            $vacunas = 0;
        } else if ($request->siNo == "no"){
            $vacunas = 1;
        } else{
            return response()->json(["mensaje" => "si o no"], 404);
        }

        $pacientes = Paciente::where('antivacunas', $vacunas)->get();
        return new PacienteCollection($pacientes);
    }

    public function vacunar(Request $request){
        $vacuna = Vacuna::where('id', $request->vacuna_id)->first();
        $paciente = Paciente::where('id', $request->paciente_id)->first();

        $vacuna->pacientes()->syncWithoutDetaching($paciente->id);

        return response()->json(["mensaje" => "Vacuna aplicada al usuario ". $paciente->nombre], 200);
    }

    public function actualizarFechaVacuna(Request $request){
        $vacuna = Vacuna::where('slug', $request->vacuna)->first();

        foreach ($vacuna->pacientes as $paciente){
            $pacienteP = Paciente::where('id', $paciente->id)->first();
            $pacienteP->fechaUltimaVacuna = now();
            $pacienteP->save();
        }

        return response()->json(["mensaje" => "Fecha de vacuna actualizada a todos los pacientes de la vaucna ". $vacuna->nombre], 200);
    }

    public function borrarNovacunados(){
        $pacientesNoVacunado = Paciente::where('fechaUltimaVacuna', null)->get();

        foreach ($pacientesNoVacunado as $paciente){
            $paciente->delete();
        }

        return response()->json(["mensaje" => "Pacientes no vacunados eliminados"], 200);
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
