<?php

use Faker\Generator as Faker;

$factory->define(App\Gebaude::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'anz_raum' => $faker->numberBetween(10,30),
        'anz_etage' => $faker->numberBetween(5,10),
        'image' => $faker->imageUrl($width = 700, $height = 300)
    ];
});
