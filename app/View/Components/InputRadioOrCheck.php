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

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $records, $label, $isVertical=true, $multiple=false, $secondaryInputLabel='', $type='radio')
    {
        $this->multiple = $multiple;
        $this->name = $multiple ? $name . '[]' : $name;
        $this->type = $multiple ? 'checkbox' : $type;
        $this->label = $label;
        $this->records = $records;
        $this->isVertical = $isVertical ? 'd-flex' : '';
        $this->secondaryInputLabel = $secondaryInputLabel;
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
