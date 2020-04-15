<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {

    return [
        'id' => $faker->randomNumber(),
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'PIN' => $faker->randomNumber(4),
        'microcontrollers' => [
            [
                'name'=> 'arduino_mega',
                'ip'=> '192.168.1.56'
            ],
            [
                'name'=> 'esp32cam',
                'ip'=> '192.168.1.57'
            ],
            [
                'name'=> 'arduino_uno',
                'ip'=> '192.168.1.55'
            ]
        ]
    ];
});
