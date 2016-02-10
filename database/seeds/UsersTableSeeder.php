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
            'username' => 'administrador',
            'name' => 'Administrador',
            'email' => 'roberto@fimatec.com.br',
            'password' => bcrypt('monitor5'),
        ]);
    }
}
