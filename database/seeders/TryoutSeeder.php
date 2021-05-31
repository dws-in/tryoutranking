<?php

namespace Database\Seeders;

use App\Models\Tryout;
use Illuminate\Database\Seeder;

class TryoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tryout::factory()->times(count:10)->create();
    }
}
