<?php

namespace Database\Factories;

use App\Models\question;
use Illuminate\Support\Str;
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
        $title = $this->faker->sentence;
        $slug =Str::of($title)->slug('-');


        return [
            'title' => $title,
            'slug'=>$slug,
            'description' => $this->faker->realText,
            'category_id' => $this->faker->numberBetween(1,2),
            'user_id' => $this->faker->numberBetween(1,5),
        ];    
    }
}
