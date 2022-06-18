<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Traits\CommonListElements;

class ReferralForms extends Component
{

    use CommonListElements;

    public function show()
    {
        $this->emit('show-referrer');
    }


    public function render()
    {
        return view('livewire.referral-forms')->extends('layouts.master')->section('content');
    }
}
