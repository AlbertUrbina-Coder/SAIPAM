<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $primaryKey = 'idEvento';

    public $timestamps = true;

    protected $table = 'eventos';

    //Relacion uno a muchos
    public function tipo_ticket(){
        return $this->hasMany('App\Models\TipoTickets','idEvento', 'idEvento');
    }
    //Relacion uno a muchos
    public function ticket(){
        return $this->hasMany('App\Models\Tickets','idEvento', 'idEvento');
    }

    //Relacion uno a muchos(inversa)
    public function ciudades(){
        return $this->belongsTo('App\Models\Ciudade', 'idCiudad', 'id');
    }
    //Relacion uno a muchos(inversa)
    public function productores(){
        return $this->belongsTo('App\Models\Productore', 'idProductor', 'idProductor');
    }
    //Relacion uno a muchos(inversa)
    public function locaciones(){
        return $this->belongsTo('App\Models\Locaciones', 'idLocacion', 'idProductor');
    }
}
