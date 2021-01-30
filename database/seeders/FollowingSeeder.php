<?php

namespace Database\Seeders;

use App\Models\Following;
use Illuminate\Database\Seeder;

class FollowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $followings = [
            ['avatar' => 'img/1.jpg',
                'name' => 'Selma Campos',
                'handle' => '@selmacampos',
                'time' => '20 min',
                'tweet' => 'Should I just quarantine on mars??',
                'comments' => '1,000',
                'retweets' => '550',
                'like' => '1,000,003'],
            ['avatar' => 'img/2.jpg', 'name' => 'Alessandro Campos', 'handle' => '@alessandrocampos', 'time' => '55 min', 'tweet' => 'Should me and the rock do another sub-par movie together????', 'comments' => '2,030', 'retweets' => '50', 'like' => '20,003'],
            ['avatar' => 'img/3.jpg', 'name' => 'Selma Campos', 'handle' => '@selmacampos', 'time' => '1.4 hr', 'tweet' => 'Haha just made a flame thrower. Shld I sell them?', 'comments' => '100,000', 'retweets' => '1,000,002', 'like' => '5,000,003'],
            ['avatar' => 'img/4.jpg', 'name' => 'Selma Campos', 'handle' => '@selmacampos', 'time' => '1.4 hr', 'tweet' => 'Just did something crazyyyyyyy', 'comments' => '100,500', 'retweets' => '1,000,032', 'like' => '5,000,103']
        ];

        foreach ($followings as $following){

            Following::factory(1)->create($following);
        }
    }
}
