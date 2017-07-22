<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.tipos_documentos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre_tipo', 33);
            $table->string('codigo_tipo_documento')->unique();

            $table->integer('estado_tipo_documento')->unsigned();
            $table->foreign('estado_tipo_documento')->references('id')->on('v_2.estados');



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
        Schema::drop('v_2.tipos_documentos');
    }
}
