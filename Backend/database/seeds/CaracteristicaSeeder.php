<?php

use Illuminate\Database\Seeder;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Básico */
        DB::table('caracteristicas')->insert([
            'ar_condicionado' => 0,
            'automatico' => 0,
            'manual' => 1,
            'trava_eletrica' => 0,
            'vidro_eletrico' => 0,
            'categoria' =>1
        ]);

        /* Intermediário */
        DB::table('caracteristicas')->insert([
            'ar_condicionado' => 1,
            'automatico' => 0,
            'manual' => 1,
            'trava_eletrica' => 1,
            'vidro_eletrico' => 1,
            'categoria' =>2
        ]);

        /* Intermediário */
        DB::table('caracteristicas')->insert([
            'ar_condicionado' => 1,
            'automatico' => 0,
            'manual' => 1,
            'trava_eletrica' => 0,
            'vidro_eletrico' => 1,
            'categoria' =>2
        ]);

        /* Intermediário */
        DB::table('caracteristicas')->insert([
            'ar_condicionado' => 1,
            'automatico' => 0,
            'manual' => 1,
            'trava_eletrica' => 1,
            'vidro_eletrico' => 0,
            'categoria' =>2
        ]);

        /* Luxo */
        DB::table('caracteristicas')->insert([
            'ar_condicionado' => 1,
            'automatico' => 1,
            'manual' => 0,
            'trava_eletrica' => 1,
            'vidro_eletrico' => 1,
            'categoria' =>3
        ]);

        /* Luxo */
        DB::table('caracteristicas')->insert([
            'ar_condicionado' => 1,
            'automatico' => 0,
            'manual' => 1,
            'trava_eletrica' => 1,
            'vidro_eletrico' => 1,
            'categoria' =>2
        ]);
    }
}
