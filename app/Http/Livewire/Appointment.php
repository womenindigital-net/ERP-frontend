<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use Livewire\Component;

class Appointment extends Component
{
    use CommonListElements;

    public function show()
    {
        $this->emit('show-appointment');
    }

    public function render()
    {
        return view('livewire.appointment');
    }
}
