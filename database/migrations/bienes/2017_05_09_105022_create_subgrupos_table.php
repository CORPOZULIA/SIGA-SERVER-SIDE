<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubgruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_2.subgrupos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('grupo_padre')->unsigned();
            $table->integer('grupo_hijo')->unsigned();

            $table->foreign('grupo_padre')->references('id')->on('v_2.grupos');
            $table->foreign('grupo_hijo')->references('id')->on('v_2.grupos');

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
        Schema::drop('v_2.subgrupos');
    }
}
