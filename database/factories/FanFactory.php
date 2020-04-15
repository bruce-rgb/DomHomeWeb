<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fan;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Fan::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'name' => $faker->randomElement($array = array ('Ventilador 1','Ventilador 2')),
        'mode' => $faker->randomElement($array = array ('auto','manual')),
        'status' => $faker->randomElement($array = array ('on','off')),
        'temperature' => 25,
        'address_id' => Address::all()->random()->id,
    ];
});
