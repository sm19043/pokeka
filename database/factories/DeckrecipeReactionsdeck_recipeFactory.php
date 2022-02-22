<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeckrecipeReaction;
use Faker\Generator as Faker;

$factory->define(DeckrecipeReaction::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'deckrecipe_id' => 1, 
        //
    ];
});
