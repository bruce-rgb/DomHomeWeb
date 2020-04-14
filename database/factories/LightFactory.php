<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Light;
use Faker\Generator as Faker;
use App\Schedule;

$factory->define(Light::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('light 1','light 2')),
        'status' => $faker->randomElement($array = array ('on','off')),

        'schedule_id' => Schedule::where('name', 'lighting_schedule')->get()->random()->_id,
    ];
});
