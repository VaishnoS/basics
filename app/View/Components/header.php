<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $labelName;
    public $type;
    public $name;
    public $id;
    public $placeholder;
    public $demo;

    public function __construct($labelName, $type, $name, $id, $placeholder, $demo = 5) //$demo is used as a optional
    {
        $this->labelName = $labelName;
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->demo = $demo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
