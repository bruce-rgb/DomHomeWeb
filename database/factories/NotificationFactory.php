<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notification;
use Faker\Generator as Faker;
use App\Address;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Movimiento detectado','Cerrar Gas','Se cerró Gas')),
        'description' => $faker->sentence(10),
        'hour' => $faker->time(),
        'viewed' => $faker->randomElement($array = array (0,1)),

        'address_id' => Address::all()->random()->_id,
    ];
});
