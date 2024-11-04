<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableComponent extends Component
{
    public $title;
    public $headers;
    public $rows;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $headers, $rows)
    {
        $this->title = $title;
        $this->headers = $headers;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table-component');
    }
}
