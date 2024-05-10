<?php

namespace App\View\Components\icons;

use Illuminate\View\Component;

class calendar extends Component
{
    public $class;
    public $stroke_width;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = 'w-6 h-6', $stroke_width = '1.5')
    {
        $this->class = $class;
        $this->stroke_width = $stroke_width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icons.calendar');
    }
}
