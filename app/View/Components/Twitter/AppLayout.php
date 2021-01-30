<?php

namespace App\View\Components\Twitter;

use Illuminate\View\Component;

class AppLayout extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layouts.twitter.app');
    }
}
