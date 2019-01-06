<?php

use Faker\Generator as Faker;

$factory->define(App\Model\admin\admin::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => '$2y$10$mfp0SVz48GYQH3C0CahpPeEERQmkaEOqwUBKxNFa/ZLUk2E21G7cO'
    ];
});
