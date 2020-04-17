<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioIncluyeHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_incluye_habitacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_tipo_habitacion');

            $table->foreign('id_servicio')
                ->references('id')->on('servicios');
            $table->foreign('id_tipo_habitacion')
                ->references('id')->on('tipo_habitacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_incluye_habitacions');
    }
}
