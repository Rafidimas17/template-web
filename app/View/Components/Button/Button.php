<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $onclick;
    public $class;
    public $iconClass;
    public $link;
    public $id;
    public $target;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'button', $onclick = '', $iconClass='', $class = '', $link = '', $id = '', $target = '_self', $title = '')
    {
        $this->type=$type;
        $this->onclick=$onclick;
        $this->class=$class;
        $this->link=$link;
        $this->iconClass=$iconClass;
        $this->id=$id;
        $this->target=$target;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.button');
    }
}