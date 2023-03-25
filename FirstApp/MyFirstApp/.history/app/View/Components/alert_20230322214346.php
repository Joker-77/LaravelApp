<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{

    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct(String $message = null)
    {
        if (isset($message)) {
            $this->message = $message;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
