<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
        [
        	'id'          => '1',
        	'codigo_p'    => '0000001-2017',
        	'fecha'		  => '2017-01-20',
           	'estado'      => 'T'
        	],
        	 [
        	'id'          => '2',
        	'codigo_p'    => '0000002-2017',
        	'fecha'		  => '2017-05-18',
           	'estado'      => 'T'
        	],
        	 [
        	'id'          => '3',
        	'codigo_p'    => '0000003-2017',
        	'fecha'		  => '2017-08-12',
           	'estado'      => 'T'
        	],
        	 [
        	'id'          => '4',
        	'codigo_p'    => '0000004-2017',
        	'fecha'		  => '2017-10-25',
           	'estado'      => 'T'
        	],
        	 [
        	'id'          => '5',
        	'codigo_p'    => '0000005-2017',
        	'fecha'		  => '2017-11-21',
           	'estado'      => 'T'
        	],
        		 [
        	'id'          => '6',
        	'codigo_p'    => '0000006-2017',
        	'fecha'		  => '2017-12-3',
           	'estado'      => 'T'
        	],
        		 [
        	'id'          => '7',
        	'codigo_p'    => '0000007-2017',
        	'fecha'		  => '2017-12-19',
           	'estado'      => 'T'
        	],
        			 [
        	'id'          => '8',
        	'codigo_p'    => '0000001-2018',
        	'fecha'		  => '2018-01-03',
           	'estado'      => 'T'
        	],

        	[
        	'id'          => '9',
        	'codigo_p'    => '0000002-2018',
        	'fecha'		  => '2018-01-04',
           	'estado'      => 'T'
        	],
        		[
        	'id'          => '10',
        	'codigo_p'    => '0000003-2018',
        	'fecha'		  => '2018-01-11',
           	'estado'      => 'P'
        	]


        	]);
    }
}
