<?php

use Illuminate\Database\Seeder;

class OpenedPacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OpenedPack::class, 10)->create();
        //
    }
}