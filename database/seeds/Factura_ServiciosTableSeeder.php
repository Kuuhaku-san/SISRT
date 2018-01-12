<?php

use Illuminate\Database\Seeder;

class Factura_ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('factura_servicios')->insert([
       	[
       	'id' => '1',
       	'servicio_id'=> '1',
       	'dni_u'=>'11111111',
       	'fecha'=>'2017-01-20'
       	],
       		[
       	'id' => '2',
       	'servicio_id'=> '2',
       	'dni_u'=>'11111111',
       	'fecha'=>'2017-05-18'
       	],
       		[
       	'id' => '3',
       	'servicio_id'=> '3',
       	'dni_u'=>'11111111',
       	'fecha'=>'2017-08-12'
       	],
       			[
       	'id' => '4',
       	'servicio_id'=> '4',
       	'dni_u'=>'22222222',
       	'fecha'=>'2017-10-25'
       	],
       	 [
       	'id' => '5',
       	'servicio_id'=> '5',
       	'dni_u'=>'22222222',
       	'fecha'=>'2017-11-21'
       	],
       	[
       	'id' => '6',
       	'servicio_id'=> '6',
       	'dni_u'=>'22222222',
       	'fecha'=>'2017-12-3'
       	],
       	 [
       	'id' => '7',
       	'servicio_id'=> '7',
       	'dni_u'=>'44444444',
       	'fecha'=>'2017-12-19'
       	],
       	 	 [
       	'id' => '8',
       	'servicio_id'=> '8',
       	'dni_u'=>'44444444',
       	'fecha'=>'2018-01-03'
       	],
       	 	 [
       	'id' => '9',
       	'servicio_id'=> '9',
       	'dni_u'=>'55555555',
       	'fecha'=>'2018-01-04'
       	],
       	 	 [
       	'id' => '10',
       	'servicio_id'=> '10',
       	'dni_u'=>'566666666',
       	'fecha'=>'2018-01-11'
       	]

       	]);
    }
}
