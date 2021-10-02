<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTickets extends Model
{
    use HasFactory;

    protected $primaryKey = 'idTipoTicket';

    public $timestamps = true;

    protected $table = 'tipo_tickets';

    //Relacion uno a muchos
    public function tickets(){
        return $this->hasMany('App\Models\Tickets','idTipoTicket', 'idTipoTicket');
    }

    //Relacion uno a muchos(inversa)
    public function eventos(){
        return $this->belongsTo('App\Models\Eventos', 'idEvento', 'idEvento');
    }
}
