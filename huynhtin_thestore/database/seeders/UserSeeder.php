<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            ['name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0981651106',
            'password' => \Hash::make($value = 'password'),
            'updated_at' => now(),
            'created_at' => now(),
            'role_id' => 1,],
            ['name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '0981651107',
            'password' => \Hash::make($value = 'password'),
            'updated_at' => now(),
            'created_at' => now(),
            'role_id' => 2,],
            ['name' => 'guest',
            'email' => 'guest@gmail.com',
            'phone' => '0981651108',
            'password' => \Hash::make($value = 'password'),
            'updated_at' => now(),
            'created_at' => now(),
            'role_id' => 3,],
        ]);
    }
}
