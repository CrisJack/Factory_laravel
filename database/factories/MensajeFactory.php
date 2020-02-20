<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mensaje;
use Faker\Generator as Faker;

$factory->define(Mensaje::class, function (Faker $faker) {
    return [
        
        'message'=>$faker->sentence(3),
        'user_id'=>factory(App\User::class),

    ];
});
