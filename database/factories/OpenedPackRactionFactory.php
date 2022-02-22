<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OpenedPackReaction;
use Faker\Generator as Faker;

$factory->define(OpenedPackReaction::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'opened_pack_id' => 1,
        //
    ];
});
