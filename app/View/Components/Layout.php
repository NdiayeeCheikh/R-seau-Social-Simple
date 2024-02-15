<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title='')
    {
        //A chaque fois le title on veut qu'il yait le nom de l'application dessus
        $this->title=config('app.name').($title?  "| $title":'');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.default');
    }
}
