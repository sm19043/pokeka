<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(DeckrecipeCommentsTableSeeder::class);
         $this->call(DeckrecipesReactionsTableSeeder::class);
         $this->call(DeckrecipesTableSeeder::class);
         $this->call(OpenedPacksTableSeeder::class);
         $this->call(OpenedPackReactionsTableSeeder::class);
    }
}
