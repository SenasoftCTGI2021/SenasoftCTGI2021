<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cartaidtipo')->unsigned();
            $table->string('carta', 45);
            
            $table->timestamps();
        });

        Schema::table('cartas', function (Blueprint $table) {
            $table->foreign('cartaidtipo')
            ->references('id')->on('tipo_carta')->onDelete('cascade');
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
