<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('integrante1')->nullable();
            $table->string('integrante2')->nullable();
            $table->string('integrante3')->nullable();
            $table->string('integrante4')->nullable();
            $table->string('integrante5')->nullable();
            $table->string('integrante6')->nullable();
            $table->text('historia')->nullable();
            $table->integer('id_categoria');
            $table->string('origem')->nullable();
            $table->integer('id_pais')->nullable();
            $table->string('periodo_atividade')->nullable();
            $table->string('pagina_oficial')->nullable();
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
        Schema::dropIfExists('bandas');
    }
}
