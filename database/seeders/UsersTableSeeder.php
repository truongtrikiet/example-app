<?php

namespace Database\Seeders;

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
    public function run(): void
    {

        $data = [
            [
                'user_name' => 'Admin',
                'email' =>'admin@gmail.com',
                'password' => Hash::make('Admin123@'),
                'role' => 1
            ],
            [
                'user_name' => 'user',
                'email' =>'user@gmail.com',
                'password' => Hash::make('user123@'),
                'role' => 2
            ]
        ];

        DB::table('users')->insert($data);
    }
}
