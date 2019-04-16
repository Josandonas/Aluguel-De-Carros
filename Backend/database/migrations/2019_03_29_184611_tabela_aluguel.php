<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluguels', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->char('cliente',11);
            $table->integer('carro');
            $table->string('agencia');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->double('valor_total');
            $table->foreign('cliente')->references('cpf')->on('clientes');
            $table->foreign('carro')->references('id')->on('carros');
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
        Schema::dropIfExists('aluguel');
    }
}
