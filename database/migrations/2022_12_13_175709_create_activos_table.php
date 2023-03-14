<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo')->nullable();
            $table->string('descrip')->nullable();
            $table->string('precio')->nullable();
            $table->date('fechaadq')->nullable();
            $table->string('foto')->nullable();
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->integer('oficina_id')->unsigned();
            $table->foreign('oficina_id')->references('id')->on('oficinas');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activos');
    }
}
