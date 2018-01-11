<?php

use Illuminate\Database\Seeder;

class Factura_ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factura_compras')-->insert([
        	[
        	'id'-->'1',
        	'servicio_id'-->'1',
        	'ruc_p'-->"20482587276",
        	'fecha'-->'2017-01-20'
        	],

        		[
        	'id'-->'2',
        	'servicio_id'-->'3',
        	'ruc_p'-->'20445406229',
        	'fecha'-->'2017-08-12'
        	],

        		[
        	'id'-->'3',
        	'servicio_id'-->'4',
        	'ruc_p'-->'20531905963',
        	'fecha'-->'2017-10-25'
        	],

        		[
        	'id'-->'4',
        	'servicio_id'-->'5',
        	'ruc_p'-->'20402959763',
        	'fecha'-->'2017-11-21'
        	],

        		[
        	'id'-->'5',
        	'servicio_id'-->'6',
        	'ruc_p'-->'20482587276',
        	'fecha'-->'2017-12-3'
        	],

        		[
        	'id'-->'6',
        	'servicio_id'-->'8',
        	'ruc_p'-->'20445406229',
        	'fecha'-->'2018-01-03'
        	],

        		[
        	'id'-->'7',
        	'servicio_id'-->'9',
        	'ruc_p'-->'20531905963',
        	'fecha'-->'2018-01-04'
        	],

        		[
        	'id'-->'8',
        	'servicio_id'-->'10',
        	'ruc_p'-->'20402959763',
        	'fecha'-->'2018-01-11'
        	],
        	])
    }
}
