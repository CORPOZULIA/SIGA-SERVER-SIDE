<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.activos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_activo');

            $table->string('codigo_activo',20)->unique();
            $table->string('serial_activo')->unique();

            $table->text('descripcion');
            $table->float('costo_inicial_activo');
            
            $table->string('deprecia_activo',2);
            $table->integer('tiempo_deprec_activo');
            $table->float('porcent_deprec_anual_activo');
            $table->date('fecha_compra');
            
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('v_2.grupos')->onDelete('cascade');

            $table->integer('comprobante_id')->unsigned();
            $table->foreign('comprobante_id')->references('id')->on('v_2.comprobantes');


            $table->integer('filiales_id')->unsigned();
            $table->foreign('filiales_id')->references('id')->on('v_2.filiales')->onDelete('cascade');

            $table->integer('operacion_id')->unsigned();
            $table->foreign('operacion_id')->references('id')->on('v_2.operaciones')->onDelete('cascade');

            $table->integer('ubic_admin_id')->unsigned();
            $table->foreign('ubic_admin_id')->references('id')->on('v_2.ubicaciones_administrativas')->onDelete('cascade');

            $table->integer('estado_activo')->unsigned();
            $table->foreign('estado_activo')->references('id')->on('v_2.estados')->onDelete('cascade');


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
        Schema::drop('v_2.activos');
    }
}
