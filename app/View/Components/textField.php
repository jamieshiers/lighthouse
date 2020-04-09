<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textField extends Component
{
    /**
     * Label for the text field.
     *
     * @var string
     */
    public $label;

    /**
     * Text Field name.
     * @var string
     */
    public $name;

    /**
     * Text field Type.
     * @var string
     */
    public $type;

    /**
     *  Text Field Placeholder.
     * @var string
     */
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $placeholder, $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.textField');
    }
}
