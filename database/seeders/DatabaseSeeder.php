<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(1)->create([
             'email'=>'contato@sigasmart.com.br'
         ]);
        $this->call(FollowingSeeder::class);
        $this->call(FriendSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(TrendingSeeder::class);
    }
}
