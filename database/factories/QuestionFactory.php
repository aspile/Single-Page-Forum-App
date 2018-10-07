<?php

use Faker\Generator as Faker;
use App\Model\Category;
use App\User;

$factory->define(App\Model\Question::class, function (Faker $faker) {

    $title = $faker->sentence;

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'categoryId' => function(){
            return Category::all()->random();
        },
        'userId' => function(){
            return User::all()->random();
        }
    ];
});
