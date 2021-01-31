<?php

namespace Database\Factories;

use App\Models\question;
use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class questionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text,
            'description' => $this->faker->realText,
            'category_id' => $this->faker->numberBetween(1,2),
            'user_id' => $this->faker->numberBetween(1,5),
        ];    
    }
}
