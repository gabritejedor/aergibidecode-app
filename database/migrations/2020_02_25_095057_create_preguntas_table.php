<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->Increments('id_pregunta');
            $table->bigInteger('id_user')->unsigned();
            $table->string('titulo');
            $table->string('descripcion',500);
            $table->date('fecha');
            $table->string('imagen');
            $table->integer('estado');
            $table->integer('votos');
            $table->integer('visitas');
            $table->string('lenguaje');


        });
        Schema::table('pregunta', function($table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
}
