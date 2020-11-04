<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store_services;
use App\Stores;
use Faker\Generator as Faker;

$factory->define(Store_services::class, function (Faker $faker) {
    return [
        //
        'stores_id' =>factory(\App\Stores::class),
        'services_id' =>factory(\App\Services::class)
    ];
});
