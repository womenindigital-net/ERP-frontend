<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\StudentRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StudentList extends Component
{
    use WithPagination, CommonListElements;

    private StudentRepository $studentRepo;

    public function boot(StudentRepository $studentRepo)
    {
        $this->studentRepo = $studentRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->studentRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function delete($id)
    {
        $this->studentRepo->delete($id);
        $this->dispatchBrowserEvent('notify', 'Deleted');
    }

    public function render()
    {
        $data = [
            'records' => $this->studentRepo->getListData($this->perPage, $this->search)
        ];
        return view('livewire.student-list',$data)->extends('layouts.master')->section('content');
    }
}
