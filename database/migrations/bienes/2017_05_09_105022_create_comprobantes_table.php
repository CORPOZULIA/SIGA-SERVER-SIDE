<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.comprobantes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('concepto_comprobante');

            $table->integer('tipo_documento_id')->unsigned();
            $table->foreign('tipo_documento_id')->references('id')->on('v_2.tipos_documentos');
            $table->string('numero_documento');

            $table->integer('institucion_id')->unsigned();
            $table->foreign('institucion_id')->references('id')->on('v_2.institucion');

            $table->integer('estado_comprobante')->unsigned();
            $table->foreign('estado_comprobante')->references('id')->on('v_2.estados');

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
        Schema::drop('v_2.comprobantes');
    }
}
