<?php

namespace App\Http\Livewire;

use App\Repositories\DoctorRepository;
use App\Repositories\UserRepository;
use Livewire\Component;

class ReferralFormCreate extends Component
{
    private UserRepository $userRepo;
    private DoctorRepository $doctorRepo;

    public function boot(UserRepository $userRepo, DoctorRepository $doctorRepo)
    {
        $this->userRepo = $userRepo;
        $this->doctorRepo = $doctorRepo;
    }


    public function render()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'doctors' => $this->doctorRepo->getDate(),
        ];

        return view('livewire.referral-form-create', $data);
    }
}
