<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CloseButton extends Component
{
    public $target;

    public function __construct($target)
    {
        $this->target = $target;
    }

    public function render()
    {
        return view('components.close-btn');
    }
}