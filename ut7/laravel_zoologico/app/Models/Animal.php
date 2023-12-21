<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animales';

    public function getEdad(){
        $fechaFormateada=Carbon::parse($this->fechaNacimiento);
        return $fechaFormateada->diffInYears(Carbon::now());
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function revisiones(){
        return $this->hasMany(Revision::class);
    }

    public function cuantasRevisiones(){
        return $this->revisiones()->count();
    }

}
