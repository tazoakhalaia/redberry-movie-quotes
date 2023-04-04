<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputs extends Component
{
    public $placeholder;
    public $type;
    public $name;
    public $labelname;

    public function __construct($placeholder, $type, $name, $labelname)
    {
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->name = $name;
        $this->labelname = $labelname;
    }



    public function render(): View|Closure|string
    {
        return view('components.form-inputs');
    }
}
