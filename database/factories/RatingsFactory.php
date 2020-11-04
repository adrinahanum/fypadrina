<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ratings;
use Faker\Generator as Faker;

$factory->define(Ratings::class, function (Faker $faker) {
    return [
        //
        'stores_id' =>factory(\App\Stores::class),
        'value_ratings' => $faker->numberBetween(1,5)
    ];
});
