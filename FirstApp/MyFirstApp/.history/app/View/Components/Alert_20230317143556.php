<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    // only public property will be viewed (passed) to the component
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function showMessage($message): string
    {
        return $message . " User: Basel";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
