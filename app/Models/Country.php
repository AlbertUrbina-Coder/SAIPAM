<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function ciudades(){
        return $this->hasMany('App\Models\Ciudade','countries_id', 'id');
    }

}
