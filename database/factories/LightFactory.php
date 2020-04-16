<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Light;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Light::class, function (Faker $faker) {
    return [
        //'id' => $faker->randomNumber(),
        'name' => $faker->randomElement($array = array ('light 1','light 2')),
        'status' => $faker->randomElement($array = array ('on','off')),

        'address_id' => Address::All()->random()->_id,
    ];
});
