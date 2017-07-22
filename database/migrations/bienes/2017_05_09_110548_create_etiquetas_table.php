<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtiquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.etiquetas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('codigo_etiqueta',20);

            $table->integer('activo_id')->unsigned();
            $table->foreign('activo_id')->references('id')->on('v_2.activos');

            $table->integer('estado_etiqueta')->unsigned();
            $table->foreign('estado_etiqueta')->references('id')->on('v_2.estados');

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
        Schema::drop('v_2.etiquetas');
    }
}
