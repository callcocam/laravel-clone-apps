<?php

namespace App\Http\Livewire\Twitter;

use App\Models\Tweet;
use Livewire\Component;

class Tweets extends Component
{

    public $comment;

    public function render()
    {
        return view('livewire.twitter.tweets');
    }
    public function addTweet(){

        Tweet::query()->create([
            'content'=>$this->comment
        ]);
    }

    public function getTweetsProperty(){

        return Tweet::all();
    }
}
