<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_reserva');
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');
            $table->float('costo');
            $table->integer('estado')->default(1);
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_cliente');

            $table->foreign('id_usuario')
                ->references('id')->on('usuarios');
            $table->foreign('id_cliente')
                ->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservacions');
    }
}
