<?php

namespace Database\Seeders;

use App\Models\Trending;
use Illuminate\Database\Seeder;

class TrendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trendings = [
            ['subtitle' => 'Trending in TX', 'name' => 'Gigi', 'description' => 'Trending with: Rip Gigi'],
            ['subtitle' => 'Music', 'name' => 'We Won', 'description' => '135K Tweets'],
            ['subtitle' => 'Pop', 'name' => 'Blue Ivy', 'description' => '40k tweets'],
            ['subtitle' => 'Trending in US', 'name' => 'Denim Day', 'description' => '40k tweets'],
            ['subtitle' => 'Trending', 'name' => 'When Beyonce', 'description' => '25.4k tweets'],
        ];

        foreach ($trendings as $trending) {

            Trending::factory(1)->create($trending);
        }
    }
}
