<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Fashion',
                'description' => 'Stay in touch with the latest trends',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Food',
                'description' => 'Our favourite recipes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Health',
                'description' => 'An apple a day keeps the doctor away',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Category::insert($categories);
    }
}
