<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stores;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Stores::class, function (Faker $faker) {
    return [
        //
        
        'name' => $faker->title,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber
    ];
});
