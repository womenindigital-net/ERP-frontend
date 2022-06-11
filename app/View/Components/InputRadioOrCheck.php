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
    public array $checked;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($records, $label, $name = '', $checked = false, $isVertical = true, $multiple = false, $secondaryInputLabel = '', $type = 'radio', $wireModel = false)
    {
        $name                      = $wireModel ?: $name;
        $this->multiple            = $multiple;
        $this->name                = $multiple ? $name . '[]' : $name;
        $this->type                = $multiple ? 'checkbox' : $type;
        $this->label               = $label;
        $this->records             = $records;
        $this->isVertical          = $isVertical ? 'd-flex' : '';
        $this->secondaryInputLabel = $secondaryInputLabel;
        $this->wireModel           = $wireModel ? "name=$wireModel" : '';
        $this->secondaryInputWire = $secondaryInputLabel ? "name={$name}_secondary" : '';
        $this->checked = $checked ? (is_array($checked) ? $checked : [$checked]) : [];
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
