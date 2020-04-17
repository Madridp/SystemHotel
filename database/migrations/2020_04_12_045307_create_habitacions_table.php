<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('disponibilidad')->default(1);
            $table->unsignedBigInteger('id_tipo_habitacion');
            $table->unsignedBigInteger('id_disponibilidad');
            $table->unsignedBigInteger('id_reservacion_habitacion');

            $table->foreign('id_tipo_habitacion')
                ->references('id')->on('tipo_habitacions');
            $table->foreign('id_disponibilidad')
                ->references('id')->on('disponibilidads');
            $table->foreign('id_reservacion_habitacion')
                ->references('id')->on('reservacion_habitacions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacions');
    }
}
