<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discografias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_album')->nullable();
            $table->string('img_capa')->nullable();
            $table->string('gravadora')->nullable();
            $table->string('ano_gravacao', 4)->nullable();
            $table->string('ano_lancamento', 4)->nullable();
            $table->string('produtor')->nullable();
            $table->string('numero_catalogo_album', 30)->nullable();
            $table->string('id_banda');
            $table->integer('id_midia');
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
        Schema::dropIfExists('discografias');
    }
}
