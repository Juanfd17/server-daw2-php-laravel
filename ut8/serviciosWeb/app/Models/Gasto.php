<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model {
    use HasFactory;
    protected $table = 'gastos';
    protected $fillable = ['nombre', 'descripcion', 'idUsuario', 'idGrupo', 'cantidad', 'divisa', 'categoria'];

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'idGrupo', 'id');
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'idUsuario', 'id');
    }
}
