<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Note::class, function (Faker $faker) {
    return [
        'user_id' =>1,
        // 'user_id' => User::all()->random()->id,
        'body'   => $faker->sentence,
    ];
});
