<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->safeEmail(),
        'phone' => $faker->e164PhoneNumber(),
        'subject' => $faker->sentence(5),
        'message' => $faker->text(),
    ];
});
