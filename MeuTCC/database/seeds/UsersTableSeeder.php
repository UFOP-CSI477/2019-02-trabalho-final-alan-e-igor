<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'id' => 1,
            'name' => 'Admin Admin',
            'area' => 'Sistemas de Informação',
            'tipo' => 'Professor',
            'matricula' => '16.1.6666',
            'email' => 'admin@black.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Alan',
            'area' => 'Sistemas de Informação',
            'tipo' => 'Aluno',
            'matricula' => '16.1.8236',
            'email' => 'alan@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
