<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $primaryKey = 'idTicket';

    public $timestamps = true;

    protected $table = 'tickets';

    //Relacion uno a muchos(inversa)
    public function eventos(){
        return $this->belongsTo('App\Models\Eventos', 'idEvento', 'idEvento');
    }
    //Relacion uno a muchos(inversa)
    public function cliente(){
        return $this->belongsTo('App\Models\Clientes', 'idCliente', 'idCliente');
    }
    //Relacion uno a muchos(inversa)
    public function tipoTicket(){
        return $this->belongsTo('App\Models\TipoTickets','idTipoTicket', 'idTipoTicket');
    }
}
