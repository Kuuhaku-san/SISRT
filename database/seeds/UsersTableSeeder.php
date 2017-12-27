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
            'password' => bcrypt('admin'),
            'apellido_p' => 'admin',
            'apellido_m' => 'admin',
            'nombres' => 'admin',
            'tipo' => 'admin',
        ]);
    }
}
