<?php

use Illuminate\Database\Seeder;

class DeckrecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Deckrecipe::class, 50)->create();
        //
    }
}
