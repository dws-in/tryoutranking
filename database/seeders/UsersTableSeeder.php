<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@tryout.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'role_id'        => 1,
            ],
            [
                'id'             => 2,
                'name'           => 'Organizer',
                'email'          => 'organizer@tryout.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'role_id'        => 2,
            ],
            [
                'id'             => 3,
                'name'           => 'Participant',
                'email'          => 'participant@tryout.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'role_id'        => 3,
            ],
        ];

        User::insert($users);
    }
}
