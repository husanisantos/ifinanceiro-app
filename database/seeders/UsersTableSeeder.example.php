<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Inserir um usuário de exemplo
        DB::table('users')->insert([
            'name' => 'Nome do Usuário',
            'email' => 'usuario@email.com',
            'password' => Hash::make('senha'),
        ]);

    }
}
