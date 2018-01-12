<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'dni' => '11111111',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12345'),
            'apellido_p' => 'admin',
            'apellido_m' => 'admin',
            'nombres' => 'admin',
            'tipo' => 'A',
        ]);

        DB::table('users')->insert([
            'dni' => '22222222',
            'email' => 'rtg@gmail.com',
            'password' => bcrypt('admin12345'),
            'apellido_p' => 'Tejada',
            'apellido_m' => 'Graus',
            'nombres' => 'Raúl',
            'tipo' => 'A',
        ]);

        DB::table('users')->insert([
            'dni' => '33333333',
            'email' => 'evt@gmail.com',
            'password' => bcrypt('admin12345'),
            'apellido_p' => 'Vega',
            'apellido_m' => 'de Tejada',
            'nombres' => 'Emily',
            'tipo' => 'S',
        ]);
        DB::table('users')->insert([
            'dni' => '44444444',
            'email' => 'wsc@gmail.com',
            'password' => bcrypt('admin12345'),
            'apellido_p' => 'Silva',
            'apellido_m' => 'Chavez',
            'nombres' => 'Walter',
            'tipo' => 'T',
        ]);
        DB::table('users')->insert([
            'dni' => '55555555',
            'email' => 'jcn@gmail.com',
            'password' => bcrypt('admin12345'),
            'apellido_p' => 'Cordova',
            'apellido_m' => 'Nizama',
            'nombres' => 'Jimmy',
            'tipo' => 'T',
        ]);
        DB::table('users')->insert([
            'dni' => '66666666',
            'email' => 'ehc@gmail.com',
            'password' => bcrypt('admin12345'),
            'apellido_p' => 'Hervias',
            'apellido_m' => 'Carbajal',
            'nombres' => 'Erik',
            'tipo' => 'T',
        ]);
    }
}
