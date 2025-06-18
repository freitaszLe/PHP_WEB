<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemSocial extends Component
{
    public string $link;
    
    public function __construct(string $link)
    {
        $this->link = $link;
    }

   
    /**
     * Get the view / contents that represent the component.
     *  @return \Illuminate\Contracts\View\View|Closure|string
     */

    public function render()
    {
        return view('components.item-social');
    }
}
