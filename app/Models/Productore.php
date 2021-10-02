<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productore extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProductor';

    public $timestamps = true;

    protected $table = 'productores';

    //Relacion uno a muchos(inversa)
    public function ciudades(){
        return $this->belongsTo('App\Models\Ciudade', 'idCiudad', 'id');
    }
    public function eventos(){
        return $this->hasMany('App\Models\Ciudade', 'idCiudad', 'id');
    }
}
