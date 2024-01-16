<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuadro extends Model
{
    use HasFactory;
    protected $table = 'cuadros';

    public function pintor(){
        return $this->belongsTo(Pintor::class);
    }

    public function exposiciones(){
        return $this->belongsToMany(Exposicion::class, 'exposiciones_cuadros');
    }
}
