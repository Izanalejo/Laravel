<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
     public $type;   // p.ex. 'success', 'danger'
    public $title;  // títol opcional

    public function __construct($type = 'info', $title = null)
    {
        $this->type = $type;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
