<?php

namespace App\View\Components;

use Illuminate\View\Component;

class selectField extends Component
{
    /**
     * Label for the select field.
     *
     * @var string
     */
    public $label;

    /**
     * Name for the select field.
     *
     * @var string
     */
    public $name;

    /**
     * Label for the text field.
     *
     * @var string
     */
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $options)
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.selectField');
    }
}
