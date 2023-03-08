<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class civil_states extends Model
{
    use HasFactory;

    //Relacion de uno a muchos
    public function employee(){
        return $this->hasMany('App\Models\employee');
    }
}
