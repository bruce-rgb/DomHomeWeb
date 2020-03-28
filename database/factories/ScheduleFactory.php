<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement('lighting_schedule','absence_schedule'),
        'schedule_settings' =>[
            [
                "day" => "monday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
            [
                "day" => "tuesday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
            [
                "day" => "wednesday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
            [
                "day" => "thursday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
            [
                "day" => "friday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
            [
                "day" => "saturday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
            [
                "day" => "sunday",
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
				"end_time" => $faker->time()
            ],
        ],
        'address_id' => Address::all()->random()->_id,
    ];
});
