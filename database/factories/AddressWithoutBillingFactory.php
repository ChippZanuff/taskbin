<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\UserAddresses::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'gender' => 'Not indicated',
        'billing' => 0,
        'zip' => $faker->postcode,
        'country' => strtoupper(str_random(2)),
        'city' => $faker->city,
        'street' => $faker->streetAddress,
        'house_number' => $faker->buildingNumber,
        'extra_information' => $faker->randomNumber(2),
    ];
});
