<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    //Relacion de uno a uno
    public function process(){
        return $this->hasOne('App\Models\process');
    }

    //Relacion de uno a muchos
    public function civil_states(){
        return $this->belongsTo('App\Models\civil_states');
    }

    public function department(){
        return $this->belongsTo('App\Models\department');
    }

    //Relacion de mucho muchos

    public function addresses(){
        return $this->belongsToMany('App\Models\address' );
    }
}
