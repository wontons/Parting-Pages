<?php

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    $conditionOptions = ['fine', 'great', 'good', 'fair', 'poor'];

    return [
        'title' => $faker->realText(rand(10,15)),
        'author' => $faker->name,
        'publisher' => $faker->realText(rand(10,15)),
        'isbn' => $faker->isbn13,
        'condition' => $conditionOptions[rand(0,4)],
        'highlighting' => $faker->boolean(50),
        'price' => $faker->randomFloat(2,0,999),
        'sold' => $faker->boolean(10)
    ];
});
