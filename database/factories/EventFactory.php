<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'starts_at' => $faker->dateTime,
        'ends_at' => $faker->dateTimeThisMonth,
    ];
});
