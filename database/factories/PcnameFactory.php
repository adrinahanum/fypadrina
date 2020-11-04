<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pcname;
use Faker\Generator as Faker;

$factory->define(Pcname::class, function (Faker $faker) {
    return [
        //
        'user_id' =>factory(\App\User::class),
        'PCname' => $faker->sentence,
        'rating' => $faker->paragraph,
        'detail' => $faker->sentence
        
    ];
});
