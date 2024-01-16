<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposicion extends Model{
    use HasFactory;
    protected $table = 'exposiciones';


    public function cuadros(){
        return $this->belongsToMany(Cuadro::class, 'exposiciones_cuadros');
    }
}
