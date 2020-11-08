<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Helna Kurniawati',
                'email' => 'helnakurniawati91@gmail.com',
                'password' => password_hash("helnakurniawati", PASSWORD_DEFAULT),
                'role' => '1',
                'created_at' => now()
            ]
        );
        DB::table("users")->insert(
            [
                'name' => 'Agus Prayogi',
                'email' => 'agus21apy@gmail.com',
                'password' => password_hash("agusprayogi", PASSWORD_DEFAULT),
                'role' => '0',
                'created_at' => now()
            ]
        );
    }
}
