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
            $table->string('potencia');
            $table->string('aceleracao');
            $table->string('dimensao');
            $table->string('motor');
            $table->integer('categoria');
            $table->char('agencia', 14);
            $table->tinyInteger('disponivel');
            $table->longText('imagem')->nullable();
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->foreign('agencia')->references('id')->on('agencias');
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
