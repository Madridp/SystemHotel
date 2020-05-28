<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'habitacions';

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
        'disponibilidad',
        'id_tipo_habitacion',
        'id_disponibilidad',
        'id_reservacion_habitacion'


    ];

    public function fromDateTime($value)
    {
        return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    }

     //metodo para obtener todos los tipos de habitacionos asociados a la habitacion
     public function tipo_habitacion(){

        //instancia             //modelo que hace relacion //campo fk de la tabla relacional //campo llave primaria
         return $this->hasOne('App\TipoHabitacion', 'id', 'id_tipo_habitacion');

    }

    //metodo para obtener todos los tipos de habitacionos asociados a la habitacion
    public function disponibilidad_habitacion(){

        //instancia             //modelo que hace relacion //campo fk de la tabla relacional //campo llave primaria
         return $this->hasOne('App\Disponibilidad', 'id', 'id_disponibilidad');

    }

}
