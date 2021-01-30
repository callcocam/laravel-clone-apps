<?php

namespace App\Http\Livewire\Twitter;

use App\Models\Menu;
use Livewire\Component;

class Sidebar extends Component
{

    public $active;

    public function render()
    {
        return view('livewire.twitter.sidebar');
    }

    public function setActive($active){
        $this->active = $active;
    }
    public function getMenusProperty(){

        return Menu::all();
    }
}
