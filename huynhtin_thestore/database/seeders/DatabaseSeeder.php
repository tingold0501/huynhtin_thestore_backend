<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Product;
use App\Models\ProductType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProductTypeSeeder::class,
            ProductSeeder::class,
        ]);
    }
    
}
