<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stores_times;
use Faker\Generator as Faker;

$factory->define(Stores_times::class, function (Faker $faker) {
    return [
        //
        'stores_id' =>factory(\App\Stores::class),
        'times_id' =>factory(\App\Times::class)
    ];
});
