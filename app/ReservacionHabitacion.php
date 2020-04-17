<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ReservacionHabitacion extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'reservacion_habitacions';

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
        'id_reservacion'



    ];

    public function fromDateTime($value)
    {
        return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    }
}
