<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectField extends Component
{
    public $id;
    public $label;
    public $name;
    public $options;
    public $required;
    public $error;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $label, $name, $options = [], $required = false, $error = null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->required = $required;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-field');
    }
}
