<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('codigo_sala');
            $table->unsignedbigInteger('salaidtipo');
            $table->unsignedbigInteger('salaidjugador');
            $table->unsignedbigInteger('salaidjugador2');
            $table->unsignedbigInteger('salaidjugador3');
            
            $table->timestamps();
        });
        Schema::table('sala', function (Blueprint $table) {
            $table->foreign('salaidtipo')
            ->references('id')->on('tipo_sala')->onDelete('cascade');
            $table->foreign('salaidjugador')
            ->references('id')->on('jugadores')->onDelete('cascade');
            $table->foreign('salaidjugador2')
            ->references('id')->on('jugadores')->onDelete('cascade');
            $table->foreign('salaidjugador3')
            ->references('id')->on('jugadores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
