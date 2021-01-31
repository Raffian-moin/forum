<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\answer;
use App\Models\question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            $user->questions()->saveMany(question::factory(5)->make());
        });
        User::factory(10)->create()->each(function ($user) {
            $user->answers()->saveMany(answer::factory(2)->make());
        });
        \App\Models\category::factory(2)->create();
        \App\Models\like::factory(10)->create();

    }
}
