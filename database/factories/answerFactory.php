<?php

namespace Database\Factories;

use App\Models\answer;

use Illuminate\Database\Eloquent\Factories\Factory;

class answerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'answerBody' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(1,5),
            'question_id' => $this->faker->numberBetween(1,10),

        ];
    }
}
