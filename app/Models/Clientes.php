<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCliente';

    public $timestamps = true;

    protected $table = 'clientes';

    protected $fillable = ['nombreCliente','ciudad_id','genero','fechaNacimiento','correo','telefono'];

    //Relacion uno a muchos(inversa)
    public function ciudades(){
        return $this->belongsTo('App\Models\Ciudade');
    }
    //Relacion uno a muchos
    public function tickets(){
        return $this->hasMany('App\Models\Ciudade','idTicket', 'idTicket');
    }
}
