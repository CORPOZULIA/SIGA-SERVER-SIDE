<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionesFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.ubicaciones_fisicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_ubic_fisica')->unique();
            $table->string('nombre_ubic_fisica');

            $table->integer('estado__ubic_fisica')->unsigned();
            $table->foreign('estado__ubic_fisica')->references('id')->on('v_2.estados')->onDelete('cascade');

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
        Schema::drop('v_2.ubicaciones_fisicas');
    }
}
