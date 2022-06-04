<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputTextarea extends Component
{
    public string $name;
    public int $rows;
    public string $cols;
    public $label;
    public $placeholder;
    public $value;
    public string $required;

    public function __construct($name, $multiple = false, $label = false, $rows = 5, $cols = "", $placeholder = false, $value = false, $required = false)
    {
        $this->name = $multiple ? $name . '[]' : $name;
        $this->label = $label ?: prepareInputLabel($name);
        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder ?? $label;
        $this->value = old($name, $value);
        $this->required = $required ? 'required' : '';
    }

    public function render()
    {
        return view('components.input-textarea');
    }
}
