<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
     /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'reservacions';

    /**
     * The primary key associated with the table.
     * @var string
     */
    protected $primaryKey = 'id';


    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'id',
        'fecha_reserva',
        'fecha_ingreso',
        'fecha_salida',
        'costo',
        'estado',
        'id_usuario',
        'id_cliente',
        'id_habitacion'


    ];

    public function fromDateTime($value)
    {
        return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    }

    //metodo para obtener todos los tipos de habitacionos asociados a la habitacion
    public function cliente(){

        //instancia             //modelo que hace relacion //campo fk de la tabla relacional //campo llave primaria
         return $this->hasOne('App\Cliente', 'id', 'id_cliente');

    }

    //metodo para obtener todos los tipos de habitacionos asociados a la habitacion
    public function habitacion(){

        //instancia             //modelo que hace relacion //campo fk de la tabla relacional //campo llave primaria
         return $this->hasOne('App\Habitacion', 'id', 'id_habitacion');

    }

}
