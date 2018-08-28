<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'email' => $faker->sentence(100),
        'phone' => $faker->sentence(100),
        'subject' => $faker->sentence(100),
        'message' => $faker->sentence(100),
    ];
});
