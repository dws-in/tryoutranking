<?php

namespace Database\Seeders;

use App\Models\RegisterTryout;
use App\Models\Tryout;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            //PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
           // RoleUserTableSeeder::class,
            UserSeeder::class,
            ClusterSeeder::class,
            TryoutSeeder::class,
            MajorSeeder::class,
            RegisterTryoutSeeder::class,
            ScoreSeeder::class,
        ]);
    }
}
