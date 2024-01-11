<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model{
    use HasFactory;
    protected $table = 'cuidadores';

    //Relación muchos a muchos
    public function animales(){
        return $this->belongsToMany(Animal::class);
    }

}
