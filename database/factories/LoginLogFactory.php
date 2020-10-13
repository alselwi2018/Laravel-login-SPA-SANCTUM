<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\loginLog;
use Faker\Generator as Faker;

$factory->define(loginLog::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'secret' => $faker->text
    ];
});
