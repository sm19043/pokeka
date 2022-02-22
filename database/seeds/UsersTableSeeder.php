<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\factory;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //      \DB::table('users')->insert([
    //     [
    //         'dept_id' => '1',
    //         'name' => '峰内　紫',
    //         'email' => 'mineuti_0421@example.com',
    //         'password' => bcrypt('0421mineuti'),
    //         'created_at' => date('Y-m-d H:i:s'),
    //         'updated_at' => date('Y-m-d H:i:s'),
    //         'like_pokemon' => date('ピカチュウ'),
    //      ],
    //     [
    //         'dept_id' => '2',
    //         'name' => '白根　亮',
    //         'email' => 'ryo_sirane31@example.com',
    //         'password' => bcrypt('ryoryo0301'),
    //         'created_at' => date('Y-m-d H:i:s'),
    //         'updated_at' => date('Y-m-d H:i:s'),
    //         'like_pokemon' => date('ヨーギラス'),
    //     ],
    //     [
    //         'dept_id' => '3',
    //         'name' => '仙波　水咲',
    //         'email' => 'nekoneko_senmi@example.com',
    //         'password' => bcrypt('misaki9876'),
    //         'created_at' => date('Y-m-d H:i:s'),
    //         'updated_at' => date('Y-m-d H:i:s'),
    //         'like_pokemon' => date('イーブイ'),
    //     ],
       
           
    // ]);
    
    factory(App\User::class, 10)->create();
    }
}
