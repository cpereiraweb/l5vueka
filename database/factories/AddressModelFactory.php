<?php

$factory->define(App\Address::class, function (Faker\Generator $faker) {
    return [
        'street' => $faker->streetName,
        'number' => $faker->randomNumber(3),
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
    ];
});
