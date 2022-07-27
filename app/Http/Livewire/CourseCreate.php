<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Repositories\CourseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\ChartofAccountsRepository;
use App\Http\Livewire\Traits\CommonListElements;

class CourseCreate extends Component
{

    use WithPagination, CommonListElements, CommonAddMore;
    private CourseService $service;
    private CourseRepository $repo;
    private ChartofAccountsRepository $chartAccRepo;
    protected array $addMoreItems = ['heading', 'account_id', 'amount', 'cash_acc'];

    public function boot(
        ChartofAccountsRepository $chartAccRepo,
        CourseService $service,
    ) {
        $this->chartAccRepo = $chartAccRepo;
        $this->service = $service;
        $this->inputs[] = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    
    }

    public $course;
    public $duration;
    public $description;
    public $heading;
    public $account_id;
    public $amount;
    public $cash_acc;
    // public function mount()
    // {
    //     if ($this->finishedGood) {
    //         $this->finishedGood = $this->repo->getRelatedData($this->finishedGood, ['details']);

    //         $this->date = $this->finishedGood->date;
    //         $this->project_id = $this->finishedGood->project_id;
    //         $this->warehouse_id = $this->finishedGood->warehouse_id;
    //         $this->note = $this->finishedGood->note;

    //         $this->inputs = $this->finishedGood->details->toArray();
    //     }
    // }
    protected array $rules = [
        'course' => 'nullable',
        'duration' => 'nullable',
        'cash_acc' => 'nullable',
        'description' => 'nullable',
        'heading' => 'nullable',
        'account_id.*' => 'nullable',
        'amount' => 'nullable',
        'cash_acc' => 'nullable',
    ];
    // public function update()
    // {
    //     $this->service->update($this->finishedGood, $this->validate());
    //     $this->dispatchBrowserEvent('notify');
    //     $this->redirectRoute('stock-receive.create');
    // }

    public function render()
    {
        $data = [
            'cashacc' => $this->chartAccRepo->getData(),
            'accounts' => [
                'demo account 1', 
                'demo account 2', 
                'demo account 3', 
            ],
        ];
        return view('livewire.course-create', $data);
      
    }
}
