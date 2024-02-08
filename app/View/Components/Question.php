<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Question extends Component
{
    /**
     * @var array
     */
    public $records;

    /**
     * @var int
     */
    public $index;

    /**
     * Create a new component instance.
     *
     * @param array $records
     * @param int $index
     * @return void
     */
    public function __construct($records, $index)
    {
        $this->records = $records;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.question');
    }
}
