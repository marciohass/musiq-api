<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ordenacao')->nullable();
            $table->string('nome_musica')->nullable();
            $table->string('tempo', 5)->nullable();
            $table->string('compositor')->nullable();
            $table->text('letra')->nullable();
            $table->text('cifra')->nullable();
            $table->string('youtube')->nullable();
            $table->integer('id_discografia');
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
        Schema::dropIfExists('musicas');
    }
}
