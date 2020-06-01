<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formButton extends Component
{
    public string $class;

    public string $action;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $action)
    {
        $this->class = $class;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form-button');
    }
}
