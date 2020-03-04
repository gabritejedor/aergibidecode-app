<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->Increments('id_like');
            $table->bigInteger('id_user')->unsigned();
            $table->integer('id_pregunta')->unsigned();
        });

        Schema::table('like', function($table) {
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::table('like', function (Blueprint $table) {
            //
        });
    }
}
