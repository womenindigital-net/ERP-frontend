<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\UserRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\StudentRepository;
use App\Repositories\ReferralRepository;

class NoticeBoard extends Component
{
    public function render()
    {
        return view('livewire.notice-board');
    }
}
