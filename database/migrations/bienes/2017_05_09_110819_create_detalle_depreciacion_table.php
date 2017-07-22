<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDepreciacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.detalle_depreciacion', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha_depreciacion');

            $table->float('monto_depreciacion');
            $table->float('monto_restante');

            $table->integer('activo_id')->unsigned();
            $table->foreign('activo_id')->references('id')->on('v_2.activos');

            $table->integer('estado_detalle')->unsigned();
            $table->foreign('estado_detalle')->references('id')->on('v_2.estados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('v_2.detalle_depreciacion');
    }
}
