<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    $data = [
        'name' => $faker->words(4, true),
        'starts_at' => $faker->dateTime,
        'ends_at' => $faker->dateTimeThisMonth,
    ];
    $data['slug'] = str_slug($data['name']);
    return $data;
});
