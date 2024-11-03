<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $type;
    public $id;
    public $label;
    public $name;
    public $value;
    public $placeholder;
    public $required;
    public $error;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $id, $label, $name, $value = '', $placeholder = '', $required = false, $error = null)
    {
        $this->type = $type;
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
