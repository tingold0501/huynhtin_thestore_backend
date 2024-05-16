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
            'password' => \Hash::make($value = 'password'),
            'updated_at' => now(),
            'created_at' => now(),
            'role_id' => 1,],
        ]);
    }
}
