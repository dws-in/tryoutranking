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
    	foreach (range(1,50) as $i) {
            Score::insert([
                'register_id' => $i,
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
                'passing_grade' =>$faker->randomfloat($nbMaxDecimals = 1, $min = 50.0, $max = 100.0)
            ]);
	    }
    }
}
