<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class process extends Model
{
    use HasFactory;

    //Relacion uno a uno 
    public function employee(){
        return $this->belongsTo('App\Models\employee');
    }

    //Relacion de uno a muchos
    public function status(){
        return $this->belongsTo('App\Models\status');
    }
}
