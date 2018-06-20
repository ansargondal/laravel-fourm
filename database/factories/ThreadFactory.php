<?php

use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\User;

$factory->define(App\Thread::class, function (Faker $faker) {
    return array(
        'title' => $faker->sentence(10, true),
        'body' => $faker->paragraph,
        'user_id' => User::inRandomOrder()->first()->id
    );
});
