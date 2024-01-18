<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model{
    use HasFactory;
    protected $table = 'transportista';

    public function getRouteKeyName(){
        return 'slug';
    }

    public function empresas(){
        return $this->belongsToMany(Empresa::class, 'empresa_transportista');
    }

    public function paquetes(){
        return $this->hasMany(Paquete::class);
    }
}
