<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    // only public property will be viewed (passed) to the component
    public $message;
    public $type;


    // if we don't want some porperties to be exposed to the view use protected

    
    /**
     * Create a new component instance.
     */
    public function __construct($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
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
