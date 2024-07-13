<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'This is the administration role',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Creator',
                'description' => 'This is the creator role',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Member',
                'description' => 'This is the member role',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Role::insert($roles);
    }
}
