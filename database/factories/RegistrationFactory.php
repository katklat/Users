<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Registration;
use Faker\Generator as Faker;


//only required fields are faked here
//unregistered_at and time_registered to be added with sql commands e.g.
//UPDATE registrations SET unregistered_at = CURRENT_TIMESTAMP;
//UPDATE registrations SET time_registered = TIMEDIFF(unregistered_at, registered_at);
$factory->define(Registration::class, function (Faker $faker) {
    return [
      'user_id' => $faker->numberBetween(1, 11),
      'registered_at' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
    ];
});
