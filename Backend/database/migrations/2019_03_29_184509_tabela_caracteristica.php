<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaCaracteristica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->tinyInteger('ar_condicionado');
            $table->tinyInteger('automatico');
            $table->tinyInteger('manual');
            $table->tinyInteger('trava_eletrica');
            $table->tinyInteger('vidro_eletrico');
            $table->integer('categoria');
            $table->foreign('categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('caracteristicas');
    }
}
