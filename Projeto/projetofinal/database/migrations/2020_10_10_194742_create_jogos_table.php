<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player1_id');
            $table->foreign('player1_id')->references('id')->on('players');
            $table->unsignedBigInteger('player2_id');
            $table->foreign('player2_id')->references('id')->on('players');
            $table->integer('p1gols');
            $table->integer('p2gols');
            $table->string('fase', 20);
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
        Schema::dropIfExists('jogos');
    }
}
