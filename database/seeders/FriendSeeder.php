<?php

namespace Database\Seeders;

use App\Models\Friend;
use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $friends = [
            ['avatar' => 'img/1.jpg', 'name' => 'Selma Campos', 'handle' => '@selmacampos'],
            ['avatar' => 'img/3.jpg', 'name' => 'Adrian Monk', 'handle' => '@detective:)'],
            ['avatar' => 'img/2.jpg', 'name' => 'Alessandro Campos', 'handle' => '@alessandrocampos']
        ];

        foreach ($friends as $friend){

            Friend::factory(1)->create($friend);
        }
    }
}
