<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('producttypes')->insert([
            [
                'name' => 'Men’s Fashion',
                'created_at' => now(),
                'updated_at' => now(),
               
            ],
            [
                'name' => 'Women’s Fashion',
                'created_at' => now(),
                'updated_at' => now(),
               
            ],
            [
                'name' => 'Women Accessories',
                'created_at' => now(),
                'updated_at' => now(),
               
            ],
            [
                'name' => 'Men Accessories',
                'created_at' => now(),
                'updated_at' => now(),
               
            ],
            [
                'name' => 'Discount Deals',
                'created_at' => now(),
                'updated_at' => now(),
               
            ],

        ]);
    }
}
