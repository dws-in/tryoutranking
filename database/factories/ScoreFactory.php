<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Score::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tryout_id' => rand(1,10),
            'user_id' => rand(1,10),
            'indonesia' => 75,
            'english' => 75,
            'mathematic' => 75,
            'physic' => 75,
            'biology' => 75,
            'chemistry' => 75,
            'geography' => 75,
            'economy' => 75,
            'history' => 75,
            'sociology' => 75
        ];
    }
}
