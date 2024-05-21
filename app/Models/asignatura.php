<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignatura extends Model
{
    use HasFactory;
    public function profesor (){
        return $this->belongsTo('App\Models\Profesor');
    }
    public function alumno (){
        return $this->belongsTo('App\Models\Alumno');
    }
}
