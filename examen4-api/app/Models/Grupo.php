<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model{
    public $timestamps = false;
    protected $table = 'grupos';

    public function pacientes(){
        return $this->hasMany(Paciente::class, 'grupo_id', 'id');
    }

}
