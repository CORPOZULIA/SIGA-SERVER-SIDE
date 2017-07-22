<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.filiales', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre_filial');
            $table->string('codigo_filial',20);


            $table->integer('institucion_id')->unsigned();
            $table->foreign('institucion_id')->references('id')->on('v_2.institucion');

            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('v_2.estados');


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
