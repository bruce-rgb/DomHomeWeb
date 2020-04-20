<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        //'id' => $faker->randomNumber(),
        'name' => $faker->randomElement($array = array ('lighting_schedule','absence_schedule')),
        'day' => $faker->randomElement($array = array ('monday','tuesday','wednesday','thursday','friday','saturday','sunday')),
        'start_time' => $faker->time(),
        'end_time' => $faker->time(),
        'address_id' => null,
        //'address_id' => Address::all()->random()->_id,
    ];
});
