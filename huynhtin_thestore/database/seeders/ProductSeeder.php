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
                'name' => 'LV',
                'price' => 10000,
                'image' => 'http://localhost/images/z5435592853341_86b8a34e69467637381fd4a8374b2c00.jpg',
                'description' => 'LV',
                'created_at' => now(),
                'updated_at' => now(),
                'producttype_id' => 1
            ],
            [
                'name' => 'LaCoste',
                'price' => 120000,
                'image' => 'http://localhost/images/z5438854330106_4af2aa65c3657d38b613d36497425f28.jpg',
                'description' => 'LaCoste',
                'created_at' => now(),
                'updated_at' => now(),
                'producttype_id' => 1
            ],
            [
                'name' => 'LaCoste',
                'price' => 120000,
                'image' => 'http://localhost/images/z5438854368544_2bbff187ec31045e133c7dd1304a1dc4.jpg',
                'description' => 'LaCoste',
                'created_at' => now(),
                'updated_at' => now(),
                'producttype_id' => 1
            ],
            [
                'name' => 'LaCoste',
                'price' => 120000,
                'image' => 'http://localhost/images/z5438854404832_b2dd734c34663cf693e15ee68896ee0a.jpg',
                'description' => 'LaCoste',
                'created_at' => now(),
                'updated_at' => now(),
                'producttype_id' => 1
            ],
        ]);
    }
}
