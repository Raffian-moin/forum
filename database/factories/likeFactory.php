<?php

namespace Database\Factories;

use App\Models\like;
use Illuminate\Database\Eloquent\Factories\Factory;

class likeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = like::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'answer_id' => $this->faker->numberBetween(1,5),
            'user_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
