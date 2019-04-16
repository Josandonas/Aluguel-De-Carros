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
        Schema::create('agencias', function (Blueprint $table) {
            $table->char('id',14);
            $table->string('razao_social');
            $table->string('telefone');
            $table->string('email');
            $table->string('cidade');
            $table->string('estado');
            $table->string('rua');
            $table->string('numero');
            $table->string('cep');
            $table->primary('id');
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
