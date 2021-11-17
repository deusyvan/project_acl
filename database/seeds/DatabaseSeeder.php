<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'teste@teste.com',
            'password' => bcrypt('teste')
        ]);
        DB::table('users')->insert([
            'name' => 'Operador',
            'email' => 'teste1@teste.com',
            'password' => bcrypt('teste')
        ]);
    }
}
