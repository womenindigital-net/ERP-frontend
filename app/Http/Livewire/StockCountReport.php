<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StockCountReport extends Component
{
    public function render()
    {
        $data = [];
        return view('livewire.stock-count-report', $data);
    }
}