<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOficinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficinas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('piso')->nullable();
            $table->integer('responsable_id')->unsigned();
            $table->foreign('responsable_id')->references('id')->on('responsables');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oficinas');
    }
}
