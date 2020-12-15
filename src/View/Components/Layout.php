<?php

namespace LaravelLatam\Epayco\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
