<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('jugadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('username_jugador');
            $table->String('password_jugador');
            $table->String('correo');
            $table->unsignedbigInteger('jugador_idcartas');
            
            $table->timestamps();
        });

        Schema::table('jugadores', function (Blueprint $table) {
            $table->foreign('jugador_idcartas')
            ->references('id')->on('cartas')->onDelete('cascade');
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
