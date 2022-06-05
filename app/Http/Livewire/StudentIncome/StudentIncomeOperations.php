<?php

namespace App\Http\Livewire\StudentIncome;

use App\Models\Course;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\StudentIncomeDetail;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Services\StudentIncomeService;

class StudentIncomeOperations extends Component
{
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private StudentIncomeService $service;

    public function boot(ProjectRepository $projectRepo, StudentRepository $studentRepo, StudentIncomeService $service)
    {
        $this->projectRepo = $projectRepo;
        $this->studentRepo = $studentRepo;
        $this->service     = $service;
    }

    public string $project_id = "";
    public string $student_id = "";
    public string $date = "";
    public string $type = "";
    public array $course_id = [];
    public array $amount = [];

    // protected $listeners = ['student-operations' => 'studentOperations'];

    protected array $rules = [
        'project_id' => 'required',
        'student_id' => 'required',
        'date'       => 'required|date',
        'amount'     => 'required|min:1',
    ];

    protected $listeners = ['show-student-income' => 'showStudentIncome'];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->dispatchBrowserEvent('notify');
    }

    public function add()
    {
        $this->service->store($this->validate());
    }

    public function showStudentIncome($studentIncome = [], $mode = 'create', $recordId = 0)
    {
        dd($mode);
    }

    public function store()
    {
    }

    private function formattedCourses(): array
    {
        $courses = Course::specifyingRelation()->get();
        foreach ($courses as $key => $course) {
            if (!isset($custom[$course->parent_course_id])) {
                $custom[$course->parent_course_id] = [
                    'id'       => $course->parent_course_id,
                    'title'    => $course->parentCourse->title,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $course->id,
                'title' => $course->title,
            ];

            $custom[$course->parent_course_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }

    public function render(): Factory|View|Application
    {
//        dd($this->studentRepo->getData());
        $data = [
            'projects' => $this->projectRepo->getData(),
            'students' => $this->studentRepo->getData(),
            'courses'  => $this->formattedCourses(),
        ];

        return view('livewire.student-income.student-income-operations', $data);
    }
}
