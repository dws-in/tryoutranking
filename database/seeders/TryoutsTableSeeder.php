<?php

namespace Database\Seeders;

use App\Models\Tryout;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TryoutsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        Tryout::insert([
                'name' => $faker->company. " Tryout",
                'description' => $faker->text(),
                'held' => $faker->dateTime(),
                'user_id' => 2,
            ]);
	    }
    }
}
