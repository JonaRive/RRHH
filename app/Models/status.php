<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;

    //Relacion de uno a muchos
    public function process(){
        return $this->hasMany('App\Models\process');
    }
}
