<?php

use Illuminate\Database\Seeder;

class DeckrecipesReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DeckrecipeReaction::class, 10)->create();
        //
    }
}
