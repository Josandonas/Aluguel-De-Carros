<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaCarro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nome');
            $table->string('modelo');
            $table->integer('caracteristica');
            $table->char('agencia', 14);
            $table->float('valor');
            $table->tinyInteger('disponivel');
            $table->longText('imagem');
            $table->foreign('caracteristica')->references('id')->on('caracteristicas');
            $table->foreign('agencia')->references('cnpj')->on('agencia');
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
        Schema::dropIfExists('carros');
    }
}
