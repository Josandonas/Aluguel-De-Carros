<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categorias')->insert([
           'nome_categoria' => 'Basico',
           'valor'=> 35.00
       ]);

       DB::table('categorias')->insert([
        'nome_categoria' => 'Intermediario',
        'valor' => 100
        ]);

       DB::table('categorias')->insert([
            'nome_categoria' => 'Luxo',
            'valor' => 200
       ]);
    }
}
