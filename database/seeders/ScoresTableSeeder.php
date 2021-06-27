<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ScoresTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $i) {
            $user_id = 2;
            foreach (range(1,5)as $j) {
                Score::insert([
                    'user_id' => $user_id++,
                    'tryout_id' => $i,
                    'indonesia' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'english' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'mathematic' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'physic' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'biology' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'chemistry' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'geography' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'economy' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'history' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                    'sociology' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 100.0),
                ]);
            }
	    }
    }
}
