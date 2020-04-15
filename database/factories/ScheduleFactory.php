<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'name' => $faker->randomElement($array = array ('lighting_schedule','absence_schedule')),
        'schedule_settings' =>[
            "monday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
            "tuesday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
            "wednesday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
            "thursday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
            "friday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
            "saturday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
            "sunday" =>[
				"start_time" => $faker->time($format = 'H:i:s', $max = 'now') ,
                "end_time" => $faker->time()
            ],
        ],
        'address_id' => Address::all()->random()->id,
    ];
});
