<?php

namespace App\View\Components\Articles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tutorials extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title, public string $content, public string $slug)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.tutorials');
    }
}
