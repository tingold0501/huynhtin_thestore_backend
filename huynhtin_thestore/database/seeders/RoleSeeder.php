<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('roles')->insert([
            ['name' => 'admin','created_at'=>now(),'updated_at'=>now()],
            ['name' => 'user','created_at'=>now(), 'updated_at'=>now()],
            ['name' => 'guest','created_at'=>now(), 'updated_at'=>now()],
        ]);
    }
}
