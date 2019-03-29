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
        Schema::create('aluguel', function (Blueprint $table) {
            $table->integer('id');
            $table->char('cliente',11);
            $table->integer('carro');
            $table->dateTimeTz('data_inicio');
            $table->dateTimeTz('data_fim');
            $table->float('valor_total');
            $table->primary('id');
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
