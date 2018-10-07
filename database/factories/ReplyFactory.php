<?php

use Faker\Generator as Faker;
use App\Model\Question;
use App\User;

$factory->define(App\Model\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'questionId' => function() {
            return Question::all()->random();
        },

        'userId' => function() {
            return User::all()->random();
        }
    ];
});
