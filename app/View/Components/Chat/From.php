<?php

namespace App\View\Components\Chat;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class From extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $message, public string $sentAt)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chat.from');
    }
}
