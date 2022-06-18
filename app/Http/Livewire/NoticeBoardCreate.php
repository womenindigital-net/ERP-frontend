<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Repositories\NoticeBoardRepository;

class NoticeBoardCreate extends Component
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private NoticeBoardRepository $noticeBoardRepo;


    public string $send_to = '';
    public string $sub = '';
    public string $area = '';

    public function boot(UserRepository $userRepo, StudentRepository $studentRepo,  NoticeBoardRepository $noticeBoardRepo)
    {
        $this->userRepo = $userRepo;
        $this->studentRepo = $studentRepo;
        $this->noticeBoardRepo = $noticeBoardRepo;
    }

    protected array $rules = [
        'send_to' => '',
        'sub' => 'required',
        'area' => 'required',
    ];

    /**
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save()
    {
        $this->noticeBoardRepo->store($this->validate());
        $this->dispatchBrowserEvent('notifyr');
        $this->dispatchBrowserEvent("close-modal");
        $this->dispatchBrowserEvent("reset-form", ["formName" => "NoticeBoardForm"]);
    }
    public function render()
    {
        return view('livewire.notice-board-create');
    }
}
