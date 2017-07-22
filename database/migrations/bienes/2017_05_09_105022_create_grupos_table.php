<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.grupos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre_grupo');
            $table->string('codigo_grupo',20)->unique();
            $table->string('spg_cuenta');
            $table->integer('filial_id')->unsigned();
            $table->integer('estado_id')->unsigned();
           
            $table->foreign('filial_id')
                    ->references('id')
                    ->on('v_2.filiales')
                    ->onDelete('cascade');

            $table->foreign('estado_id')
                    ->references('id')
                    ->on('v_2.estados')
                    ->onDelete('cascade');

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
        Schema::drop('v_2.grupos');
    }
}
