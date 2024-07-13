<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tags = [
            [
                'name' => 'HOT',
                'color' => '#FF0000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'COLD',
                'color' => '#0000FF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TRENDING',
                'color' => '#00FF00',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ];

        Tag::insert($tags);
    }
}
