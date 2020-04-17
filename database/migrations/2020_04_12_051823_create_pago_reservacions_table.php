<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_reservacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('total_pago');
            $table->date('fecha_pago');
            $table->unsignedBigInteger('id_reservacion');
            $table->unsignedBigInteger('id_reservacion_servicio');

            $table->foreign('id_reservacion')
            ->references('id')->on('reservacions');
            $table->foreign('id_reservacion_servicio')
            ->references('id')->on('reservacion_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_reservacions');
    }
}
