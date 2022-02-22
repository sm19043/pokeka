<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OpenedPack;
use Faker\Generator as Faker;

$factory->define(OpenedPack::class, function (Faker $faker) {
    return [
        'body' => $faker->text($maxNbChars = 6),
        'category_id' => 1,
        'user_id'  => 1,
        //
    ];
});
