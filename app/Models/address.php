<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    //Relaciond de muchos a muchos
    public function employees(){
        return $this->belongsToMany('App\Models\employee',);
    }
}
