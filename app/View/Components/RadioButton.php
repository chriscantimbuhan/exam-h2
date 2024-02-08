<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioButton extends Component
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string $name
     * @param string $value
     * @return void
     */
    public function __construct($label, $name, $value)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.radio-button');
    }
}
