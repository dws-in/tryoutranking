<?php

namespace Database\Seeders;

use App\Models\RegisterTryout;
use Illuminate\Database\Seeder;

class RegisterTryoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RegisterTryout::factory()->count(50)->create();
    }
}
