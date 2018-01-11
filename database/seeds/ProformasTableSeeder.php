<?php

use Illuminate\Database\Seeder;

class ProformasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proformas')->insert([
            [
                'codigo' => '0000001-2018',
                'ruc_c' => '',
                'dni_u' => '11111111',
                'fecha' => '2018-01-01',
                'mano_de_obra' => 'Desmontar motor',
                'precio_mano_obra' => 234.00,
                'tipo' => 'I'
            ],
            [
                'codigo' => '0000002-2018',
                'ruc_c' => '',
                'dni_u' => '11111111',
                'fecha' => '2018-01-01',
                'mano_de_obra' => 'Desmontar motor',
                'precio_mano_obra' => 234.00,
                'tipo' => 'I'
            ]
        ]);

        DB::table('detalle_proforma')->insert([
            [
                'codigo' => '0000001-2018',
                'id_p' => 1,
                'cantidad' => 2,
                'precio' => 23
            ],
            [
                'codigo' => '0000001-2018',
                'id_p' => 2,
                'cantidad' => 1,
                'precio' => 15
            ],
        ]);
    }
}
