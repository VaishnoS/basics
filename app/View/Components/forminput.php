<?php

namespace App\View\Components;

use Illuminate\View\Component;

class forminput extends Component
{
    public $labelName;
    public $name;
    public $id;
    public $placeholder;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelName, $type, $name, $id, $placeholder)
    {
        $this->labelName = $labelName;
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forminput');
    }
}
