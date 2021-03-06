<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function (Blueprint $table) {
            $table->Increments('id_respuesta');
            $table->string('descripcion',500);
            $table->string('codigo',500);
            $table->string('imagen');
            $table->boolean('destacado');
            $table->date('fecha');
            $table->bigInteger('id_user')->unsigned();
            $table->integer('id_pregunta')->unsigned();
        });
        Schema::table('respuesta', function($table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_pregunta')->references('id_pregunta')->on('pregunta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta');
    }
}
