<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputText extends Component
{
    public $name;
    public $value;
    public $placeholder;
    public $id;
    public $class;
    public $type;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $type
     * @param  string|null  $value
     * @param  string|null  $placeholder
     * @param  string|null  $id
     * @param  string|null  $class
     * @return void
     */
    public function __construct($type, $name, $value = null, $placeholder = null, $id = null, $class = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->id = $id;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-text');
    }
}