<?php

use Illuminate\Database\Seeder;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'ruc' => '20482587276',
            'razon_social' => 'FRIGOTECH DEL PERU S.A.C.',
            'direccion' => 'AV. DE LOS INCAS NRO. 150 URB. CHICAGO'
        ]);
        DB::table('proveedores')->insert([
            'ruc' => '20445406229',
            'razon_social' => 'RODIMPORT S.R.L.',
            'direccion' => 'AV. PARDO NRO. 1020 P.J. MIRAMAR BAJO'
        ]);
        DB::table('proveedores')->insert([
            'ruc' => '20531905963',
            'razon_social' => 'ELECTRO FERRETERA ELIZABETH E.I.R.L.',
            'direccion' => 'NRO. S/N INT. 556 - MERCADO FERROCARRIL'
        ]);
        DB::table('proveedores')->insert([
            'ruc' => '20402959763',
            'razon_social' => 'ROKASA SAC',
            'direccion' => 'AV. JOSE PARDO NRO. 1176 INT. A A.H. MIRAMAR BAJO'
        ]);
    }
}
