<?php

namespace App\View\Components;

use Illuminate\View\Component;

class headerDoHung extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $arrayFruit;
    public function __construct($name,$arrayFruit)
    {
        //
        $this->name=$name;
        $this->arrayFruit=$arrayFruit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-do-hung');
    }
}
