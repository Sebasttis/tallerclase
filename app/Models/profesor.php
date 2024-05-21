<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;
    public function asignatura (){
        return $this->hasOne('App\Models\Asignatura');

    }

}
