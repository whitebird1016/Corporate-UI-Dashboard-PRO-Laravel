<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@corporateui.com',
                'password' => Hash::make('secret'),
                'role_id' => '1',
                'profile_picture' => asset('assets/img/team-1.jpg'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Creator',
                'email' => 'creator@corporateui.com',
                'password' => Hash::make('secret'),
                'role_id' => '2',
                'profile_picture' => asset('assets/img/team-2.jpg'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Member',
                'email' => 'member@corporateui.com',
                'password' => Hash::make('secret'),
                'role_id' => '3',
                'profile_picture' => asset('assets/img/team-3.jpg'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        User::insert($users);
    }
}
