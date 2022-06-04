<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputRadioOrCheck extends Component
{
    public string $multiple;
    public string $name;
    public string $type;
    public string $label;
    public string $isVertical;
    public $secondaryInputLabel;
    public $records;
    public string $wireModel;
    public string $secondaryInputWire;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($records, $label, $name = '', $isVertical = true, $multiple = false, $secondaryInputLabel = '', $type = 'radio', $wireModel = false, $secondaryInputWire = false)
    {
        $name                      = $wireModel ?: $name;
        $this->multiple            = $multiple;
        $this->name                = $multiple ? $name . '[]' : $name;
        $this->type                = $multiple ? 'checkbox' : $type;
        $this->label               = $label;
        $this->records             = $records;
        $this->isVertical          = $isVertical ? 'd-flex' : '';
        $this->secondaryInputLabel = $secondaryInputLabel;
        $this->wireModel           = $wireModel ? "wire:model='$wireModel'" : '';
        $this->secondaryInputWire = $secondaryInputWire ? "wire:model='$secondaryInputWire'" : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-radio-or-check');
    }
}
