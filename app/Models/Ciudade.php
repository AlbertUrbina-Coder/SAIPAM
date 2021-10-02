<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
	use HasFactory;

    //Relacion uno a muchos(inversa)
    public function Country(){
        return $this->belongsTo('App\Models\Country','countries_id', 'id');
    }

    //Relacion uno a muchos
    public function clientes(){
        return $this->hasMany('App\Models\Clientes');
    }

    //Relacion uno a muchos
    public function productores(){
        return $this->hasMany('App\Models\Productore', 'idCiudad', 'id');
    }

    //Relacion uno a muchos
    public function locaciones(){
        return $this->hasMany('App\Models\Locaciones', 'idCiudad', 'id');
    }

    public function eventos(){
        return $this->hasMany('App\Models\Ciudade', 'idCiudad', 'id');
    }
}
