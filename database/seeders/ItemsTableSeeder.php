<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Shirt',
                'photo' => asset('assets/img/bg-smart-home-1.jpg'),
                'category_id' => '1',
                'description' => 'Description 1',
                'status' => 'Published',
                'options' => '["First", "Third"]',
                'date' => '2021-08-07',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bread',
                'photo' => asset('assets/img/bg-smart-home-2.jpg'),
                'category_id' => '2',
                'description' => 'Description 2',
                'status' => 'Archived',
                'options' => '["First", "Second"]',
                'date' => '2021-08-07',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pills',
                'photo' => asset('assets/img/home-decor-3.jpg'),
                'category_id' => '3',
                'description' => 'Description 3',
                'status' => 'Draft',
                'options' => '["First", "Second", "Third"]',
                'date' => '2021-08-07',
                'created_at' => now(),
                'updated_at' => now()
            ],


        ];

        Item::insert($items);

        DB::table('item_tag')->insert([
            'item_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('item_tag')->insert([
            'item_id' => '1',
            'tag_id' => '2',
        ]);

        DB::table('item_tag')->insert([
            'item_id' => '1',
            'tag_id' => '3',
        ]);

        DB::table('item_tag')->insert([
            'item_id' => '2',
            'tag_id' => '1',
        ]);

        DB::table('item_tag')->insert([
            'item_id' => '3',
            'tag_id' => '2',
        ]);
    }
}
