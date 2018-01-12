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
                'codigo' => '0000001-2017',
                'ruc_c' => '20600567846',
                'dni_u' => '11111111',
                'fecha' => '2017-01-20',
                'mano_de_obra' => 'Desmontar capacitor',
                'precio_mano_obra' => 234.00,
                'tipo' => 'I'
            ],
            [
                'codigo' => '0000002-2017',
                'ruc_c' => '20440376704',
                'dni_u' => '11111111',
                'fecha' => '2017-05-18',
                'mano_de_obra' => 'mantenimientos ',
                'precio_mano_obra' => 500.00,
                'tipo' => 'M'
            ],
             [
                'codigo' => '0000003-2017',
                'ruc_c' => '20515931466',
                'dni_u' => '11111111',
                'fecha' => '2017-08-12',
                'mano_de_obra' => ' reparaciones',
                'precio_mano_obra' => 1000.00,
                'tipo' => 'R'
            ],
              [
                'codigo' => '0000004-2017',
                'ruc_c' => '20136740351',
                'dni_u' => '22222222',
                'fecha' => '2017-10-25',
                'mano_de_obra' => 'reparar aire acondicionado',
                'precio_mano_obra' => 350.00,
                'tipo' => 'R'
            ],
             [
                'codigo' => '0000005-2017',
                'ruc_c' => '20600567846',
                'dni_u' => '22222222',
                'fecha' => '2017-11-21',
                'mano_de_obra' => 'instalacion de valvula',
                'precio_mano_obra' => 250.00,
                'tipo' => 'I'
            ],
              [
                'codigo' => '0000006-2017',
                'ruc_c' => '20440376704',
                'dni_u' => '22222222',
                'fecha' => '2017-12-3',
                'mano_de_obra' => 'instalacion',
                'precio_mano_obra' => 450.00,
                'tipo' => 'I'
            ],
               [
                'codigo' => '0000007-2017',
                'ruc_c' => '20515931466',
                'dni_u' => '44444444',
                'fecha' => '2017-12-19',
                'mano_de_obra' => 'mantenimientos',
                'precio_mano_obra' => 800.00,
                'tipo' => 'M'
            ],
                [
                'codigo' => '0000001-2018',
                'ruc_c' => '20136740351',
                'dni_u' => '44444444',
                'fecha' => '2018-01-03',
                'mano_de_obra' => 'reparaciones',
                'precio_mano_obra' => 1200.00,
                'tipo' => 'R'
            ],
                 [
                'codigo' => '0000002-2018',
                'ruc_c' => '20136740351',
                'dni_u' => '55555555',
                'fecha' => '2018-01-04',
                'mano_de_obra' => 'instalacion de cooler',
                'precio_mano_obra' => 120.00,
                'tipo' => 'I'
            ],
                  [
                'codigo' => '0000003-2018',
                'ruc_c' => '20600567846',
                'dni_u' => '66666666',
                'fecha' => '2018-01-11',
                'mano_de_obra' => 'instalacion de gas',
                'precio_mano_obra' => 200.00,
                'tipo' => 'I'
            ]

        ]);

        DB::table('detalle_proforma')->insert([
            [
                'codigo_p' => '0000001-2017',
                'id_p' => 11,
                'cantidad' => 2,
                'precio' => 35
            ],
            [
                'codigo_p' => '0000003-2017',
                'id_p' => 10,
                'cantidad' => 3,
                'precio' => 150
            ],
             [
                'codigo_p' => '0000004-2017',
                'id_p' => 1,
                'cantidad' => 2,
                'precio' => 85
            ],
               [
                'codigo_p' => '0000005-2017',
                'id_p' => 5,
                'cantidad' => 1,
                'precio' => 125
            ],
             [
                'codigo_p' => '0000006-2017',
                'id_p' => 2,
                'cantidad' => 3,
                'precio' => 100
            ],
              [
                'codigo_p' => '0000001-2018',
                'id_p' => 3,
                'cantidad' => 5,
                'precio' => 135
            ],
              [
                'codigo_p' => '0000002-2018',
                'id_p' => 8,
                'cantidad' => 1,
                'precio' => 56
            ],
              [
                'codigo_p' => '0000003-2018',
                'id_p' => 4,
                'cantidad' => 1,
                'precio' => 125
            ]
        ]);
    }
}
