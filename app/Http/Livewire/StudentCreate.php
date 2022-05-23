<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\StudentParentDetail;
use App\Repositories\StudentRepository;
use App\Services\StudentService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class StudentCreate extends Component
{
    public string $code = '';
    public string $name = '';
    public string $gender = '';
    public string $dob = '';
    public string $date_of_assessment = '';
    public string $blood_group = '';
    public string $suborno_card_no = '';
    public string $diagnosis = '';
    public string $nid = '';
    public string $photo = '';
    public string $present_address = '';
    public string $permanent_address = '';
    public string $approved_for_observation = '';
    public string $father_name = '';
    public string $father_number = '';
    public string $father_profession = '';
    public string $father_email = '';
    public string $father_doc = '';
    public string $father_fb_link = '';
    public string $mother_name = '';
    public string $mother_number = '';
    public string $mother_profession = '';
    public string $mother_email = '';
    public string $mother_doc = '';
    public string $mother_fb_link = '';

    private StudentService $service;
    private StudentRepository $repo;

    protected array $rules = [
        'code'   => 'required|min:6',
        'name'   => 'required|min:3',
        'gender' => 'nullable',
        'dob'    => 'nullable|string',
        'date_of_assessment' => 'nullable',
        'blood_group' => 'nullable',
        'suborno_card_no' => 'nullable',
        'diagnosis' => 'nullable',
        'nid'    => 'required|min:11|max:17',
        'photo' => 'nullable',
        'present_address' => 'nullable',
        'permanent_address' => 'nullable',
        'approved_for_observation' => 'nullable',
        'father_name' => 'nullable',
        'father_number' => 'nullable',
        'father_profession' => 'nullable',
        'father_email' => 'nullable',
        'father_doc' => 'nullable',
        'father_fb_link' => 'nullable',
        'mother_name' => 'nullable',
        'mother_number' => 'nullable',
        'mother_profession' => 'nullable',
        'mother_email' => 'nullable',
        'mother_doc' => 'nullable',
        'mother_fb_link' => 'nullable',
    ];

    /*public function mount()
    {
        /*$studentFields = ['code', 'name', 'nid', 'dob', 'gender', 'blood_group', 'suborno_card_no', 'image', 'diagnosis', 'present_address',
            'date_of_assessment', 'permanent_address', 'approved_for_observation'];

        $studentParentFields = ['father_name', 'father_number', 'father_profession', 'father_email', 'father_doc', 'father_fb_link',
            'mother_name', 'mother_number', 'mother_profession', 'mother_email', 'mother_doc', 'mother_fb_link'];

        $student = new Student();
        foreach ($studentFields as $field) {
            $student->{$field} = null;
        }
        $this->student = $student;

        $studentParent = new StudentParentDetail();
        foreach ($studentParentFields as $field) {
            $studentParent->{$field} = null;
        }
        $this->studentParent = $studentParent;
    }*/

    /**
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function boot(StudentService $service, StudentRepository $repo)
    {
        $this->service = $service;
        $this->repo    = $repo;
    }

    public function store()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent("close-modal");
        $this->dispatchBrowserEvent("reset-form", ["formName" => "StudentCreateForm"]);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.student-create');
    }
}
