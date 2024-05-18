<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            [
                'name' => 'Jean',
                'price' => 10000,
                'image' => 'https://i.pinimg.com/564x/16/1f/65/161f654bcbd58296d7fbaacec6125e36.jpg',
                'description' => 'Jean',
                'created_at' => now(),
                'updated_at' => now(),
                'producttype_id' => 1
            ],
            [
                'name' => 'Jean',
                'price' => 120000,
                'image' => 'https://i.pinimg.com/564x/16/1f/65/161f654bcbd58296d7fbaacec6125e36.jpg',
                'description' => 'Jean',
                'created_at' => now(),
                'updated_at' => now(),
                'producttype_id' => 1
            ],
            
        ]);
    }
}
