<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gas;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Gas::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'name' => 'Gas',
        'status' => $faker->randomElement($array = array ('on','off')),
        'time' => '01:30:00',
        'address_id' => Address::all()->random()->id,
    ];
});
