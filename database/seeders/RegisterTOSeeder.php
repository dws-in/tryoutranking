<?php

namespace Database\Seeders;

use App\Models\RegisterTO;
use Illuminate\Database\Seeder;

class RegisterTOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RegisterTO::factory()->count(8)->create();
    }
}
