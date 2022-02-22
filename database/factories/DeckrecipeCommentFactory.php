<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeckrecipeComment;
use Faker\Generator as Faker;

$factory->define(DeckrecipeComment::class, function (Faker $faker) {
    return [
        'deckrecipe_id' => 3,
        'user_id' => 1,
        'body' => $faker->text($maxNbChars = 6),
        //
    ];
});
