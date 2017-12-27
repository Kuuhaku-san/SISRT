<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'ruc' => '20600567846',
            'razon_social' => 'BEMAST E.I.R.L.',
            'direccion' => 'JR. ELIAS AGUIRRE NRO. 582 INT. 104 - CHIMBOTE'
        ]);
        DB::table('clientes')->insert([
            'ruc' => '20440376704',
            'razon_social' => 'INTERAMERICANA TRUJILLO S.A.',
            'direccion' => 'AV. NICOLAS DE PIEROLA NRO. 750 URB. SAN FERNANDO - TRUJILLO'
        ]);
        DB::table('clientes')->insert([
            'ruc' => '20515931466',
            'razon_social' => 'INVERSIONES ANDES FISH S.A.C.',
            'direccion' => 'AV. ANTONIO MIROQUESADA NRO. 457 INT. 401 MAGDALENA DEL MAR - LIMA'
        ]);
        DB::table('clientes')->insert([
            'ruc' => '20136740351',
            'razon_social' => 'ACUACULTURA Y PESCA S.A.C.',
            'direccion' => 'AV. RICARDO ELIAS APARICIO NRO. 141 DPTO. 14 LA MOLINA - LIMA'
        ]);
    }
}
