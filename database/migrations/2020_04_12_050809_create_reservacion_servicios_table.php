<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->useCurrent();
            $table->string('descripcion', 100);
            $table->float('costo');
            $table->integer('estado')->default(1);
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_reservacion');
            
            $table->foreign('id_servicio')
                ->references('id')->on('servicios');
            $table->foreign('id_reservacion')
                ->references('id')->on('reservacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservacion_servicios');
    }
}
