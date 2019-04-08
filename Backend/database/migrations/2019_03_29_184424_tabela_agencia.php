<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaAgencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencia', function (Blueprint $table) {
            $table->char('cnpj',14);
            $table->string('razao_social');
            $table->integer('endereco');
            $table->string('telefone');
            $table->string('email');
            $table->primary('cnpj');
            $table->foreign('endereco')->references('id')->on('enderecos');
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
        Schema::dropIfExists('agencia');
    }
}
