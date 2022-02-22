<?php

use Illuminate\Database\Seeder;

class DeckrecipeCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\DeckrecipeComment::class, 10)->create();
        //
    }
}
