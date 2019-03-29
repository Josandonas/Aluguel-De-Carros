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
           'nome_categoria' => 'Basico'
       ]);

       DB::table('categorias')->insert([
        'nome_categoria' => 'Intermediario'
        ]);

       DB::table('categorias')->insert([
            'nome_categoria' => 'Luxo'
       ]);
    }
}
