<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    public string $name;
//    public string $label;
//    public string $labelFor;
    public $placeholder;
    public $value;
//    public $inputId;
//    public $inputClass;
    public string $required;
    public string $type;
    public string $wireModel;

    public function __construct($name, $type = 'text', $placeholder='', $value = false, $required = false, $wireModel='')
    {
        $this->name = $name;
//        $this->label = $label ?: prepareInputLabel($name);
//        $this->labelFor = $inputId ?: $this->label;
        $this->placeholder = $placeholder;
        $this->value = old($name, $value);
//        $this->inputId = $this->labelFor;
//        $this->inputClass = $inputClass;
        $this->required = $required ? 'required' : '';
        $this->type = $type;
        $this->wireModel = $wireModel ? "wire:model=$wireModel" : '';
    }

    public function render()
    {
        return view('components.input-text');
    }
}
