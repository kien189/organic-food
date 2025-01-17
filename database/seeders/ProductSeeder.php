<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'price' => 100.00,
                
                'sale_price' => 80.00,
                'description' => 'This is a description for Product 1',
                'short_description' => 'This is a short description for Product 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'price' => 200.00,
                'sale_price' => 150.00,
                'description' => 'This is a description for Product 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                'price' => 300.00,
                'sale_price' => null,
                'description' => 'This is a description for Product 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
