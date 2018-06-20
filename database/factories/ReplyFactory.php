<?php

use App\Thread;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(20, true),
        'user_id' => User::inRandomOrder()->first()->id,
        'thread_id' => Thread::inRandomOrder()->first()->id
    ];
});
