<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deckrecipe;
use Faker\Generator as Faker;

$factory->define(Deckrecipe::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'deck_code' => $faker->text($maxNbChars = 6),
        'body' => $faker->text($maxNbChars = 6),
        'user_id' => 1,
        
        //
    ];
});
