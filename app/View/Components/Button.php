<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component

{
    public $type;
    public $style;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'button', $style = '')
    {
        $this->type = $type;
        $this->style = $style;

        if ($style == 'submit') {
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
