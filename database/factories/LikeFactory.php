<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Model\Like::class, function (Faker $faker) {
    return [
        'userId' => function(){
            return User::all()->random();
        }
    ];
});
