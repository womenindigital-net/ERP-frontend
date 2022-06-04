<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use App\Http\Livewire\Traits\CommonListElements;

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
