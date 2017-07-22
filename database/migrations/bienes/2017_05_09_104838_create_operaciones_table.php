<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.operaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre_operacion', 33);
            $table->string('codigo_operacion')->unique();

            $table->integer('estado_operacion')->unsigned();
            $table->foreign('estado_operacion')->references('id')->on('v_2.estados');



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
        Schema::drop('v_2.operaciones');
    }
}
