<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pintor extends Model
{
    use HasFactory;
    protected $table = 'pintores';

    public function getRouteKeyName(){
        return 'slug';
    }

    public function getPais(){
        return 'pais';
    }

    public function getNombre(){
        return 'nombre';
    }

    //Relación muchos a muchos
    public function cuadros(){
        return $this->hasMany(Cuadro::class);
    }

}

