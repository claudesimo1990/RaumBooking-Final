<?php

use Faker\Generator as Faker;

$factory->define(App\Raum::class, function (Faker $faker) {
    return [
        'raum_number' => $faker->unique()->randomNumber($nbDigits = 3),
        'image' => $faker->imageUrl($width = 700, $height = 300),
        'name' => $faker->firstNameMale,
    ];
});
