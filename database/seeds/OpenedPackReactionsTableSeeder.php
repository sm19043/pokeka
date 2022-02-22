<?php

use Illuminate\Database\Seeder;

class OpenedPackReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OpenedPackReaction::class, 10)->create();
        //
    }
}
