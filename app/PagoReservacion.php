<?php
namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PagoReservacion extends Model
{
    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'pago_reservacions';

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
        'total_pago',
        'fecha_pago',
        'id_reservacion',
        'id_reservacion_servicio'


    ];

    public function fromDateTime($value)
    {
        return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    }
}
