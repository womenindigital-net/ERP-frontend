<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\UserRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\ReferralRepository;
use App\Repositories\StudentRepository;

class ReferralFormCreate extends Component
{
    private UserRepository $userRepo;
    private DoctorRepository $doctorRepo;
    private StudentRepository $studentRepo;
    private ReferralRepository $referralRepo;


    public string $date = '';
    public string $teacher_id = '';
    public string $candidate_id = '';
    public string $doctor_id = '';

    public function boot(UserRepository $userRepo, StudentRepository $studentRepo, DoctorRepository $doctorRepo, ReferralRepository $referralRepo)
    {
        $this->userRepo = $userRepo;
        $this->doctorRepo = $doctorRepo;
        $this->studentRepo = $studentRepo;
        $this->referralRepo = $referralRepo;
    }

    protected $listeners = ['show-referral' => 'showReferral'];

    public function showReferral($infos = [], $mode = 'create', $recordId = 0)
    {
        if (!count($infos)) {
            $class = new \ReflectionClass($this);
            foreach ($class->getProperties() as $property) {
                if ($property->isPublic() && $property->class === get_class($this)) {
                    $this->{$property->name} = '';
                }
            }
        } else {
            foreach ($infos as $key => $val) {
                $this->{$key} = $val;
            }
        }


        $this->mode = $mode;
        $this->recordId = $recordId;
    }


    protected array $rules = [
        'date' => 'required',
        'teacher_id' => 'required',
        'candidate_id' => 'required',
        'doctor_id' => 'required',
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
        $this->referralRepo->store($this->validate());
        $this->dispatchBrowserEvent('notifyr');
        $this->dispatchBrowserEvent("close-modal");
        $this->dispatchBrowserEvent("reset-form", ["formName" => "ReferralCreateForm"]);
    }

    public function render()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'doctors' => $this->doctorRepo->getData(),
            'students' => $this->studentRepo->getData(),
        ];

        return view('livewire.referral-form-create', $data);
    }
}
