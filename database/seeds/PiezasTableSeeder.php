<?php

use Illuminate\Database\Seeder;

class PiezasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('piezas')->insert([
            ['nombre' => 'Condensador universal 21” x 14”'],
            ['nombre' => 'Rodamiento 6006 LLU/2AU1'],
            ['nombre' => 'Compresor de aire acondicionado'],
            ['nombre' => 'Kg. gas R-134A'],
            ['nombre' => 'Válvula de servicio'],
            ['nombre' => 'Filtro 20 grs.'],
            ['nombre' => 'Filtro 3/8 roscable'],
            ['nombre' => 'Ventilador forzado 220v'],
            ['nombre' => 'Contactor 24v 20A'],
            ['nombre' => 'Tarjeta electrónica'],
            ['nombre' => 'Capacitor 3.5 uF']
        ]);
    }
}
