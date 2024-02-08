<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Grupo extends Model{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillable = ['nombre', 'descripcion', 'id_usuario_admin'];

    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'usuarios_grupos', 'grupo_id', 'usuario_id');
    }

    public function gastos(){
        return $this->hasMany(Gasto::class, 'idGrupo', 'id');
    }
}
