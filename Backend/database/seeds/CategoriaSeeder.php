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
           'nome_categoria' => 'Basico_Manual',
           'valor_diaria'=> 35.00
       ]);

       DB::table('categorias')->insert([
        'nome_categoria' => 'Basico_Automatico',
        'valor_diaria'=> 70.00
        ]);

        DB::table('categorias')->insert([
            'nome_categoria' => 'Intermediario_manual',
            'valor_diaria'=> 150.00
        ]);

       DB::table('categorias')->insert([
        'nome_categoria' => 'Intermediario_Automatico',
        'valor_diaria' => 150.00
        ]);

       DB::table('categorias')->insert([
            'nome_categoria' => 'Luxo',
            'valor_diaria' => 200.00
       ]);
    }
}
