<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Vacuna extends Model{
    public $timestamps = false;
    protected $table = 'vacunas';


    public function pacientes(){
        return $this->belongsToMany(Paciente::class, 'pacientes_vacunas', 'vacuna_id', 'paciente_id');
    }
}
