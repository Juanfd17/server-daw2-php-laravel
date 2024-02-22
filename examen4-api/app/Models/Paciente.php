<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pacientes';

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'grupo_id', 'id');
    }

    public function vacunas(){
        return $this->belongsToMany(Vacuna::class, 'pacientes_vacunas', 'paciente_id', 'vacuna_id');
    }
}
