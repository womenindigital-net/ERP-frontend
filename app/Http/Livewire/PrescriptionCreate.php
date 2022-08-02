<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\PrescriptionService;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\PrescriptionRepository;
use App\Http\Livewire\Traits\CommonListElements;

class PrescriptionCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;

    private string $destroyRoute = 'prescription.destroy';
    private PrescriptionService $service;
    private PrescriptionRepository $repo;
    protected array $addMoreItems = ['medicine_admin', 'medicine_dose', 'medicine_route'];


    public $pres_name;
    public $pres_by;
    public $medicine_admin;
    public $medicine_dose;
    public $medicine_route;

    public function boot(

        PrescriptionService $service,
        PrescriptionRepository $repository,
        
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public function mount()
    {
        // if ($this->finishedGood) {

        //     $this->finishedGood = $this->repo->getRelatedData($this->finishedGood, ['details']);
        //     $this->date = $this->finishedGood->date;
        //     $this->project_id = $this->finishedGood->project_id;
        //     $this->warehouse_id = $this->finishedGood->warehouse_id;
        //     $this->note = $this->finishedGood->note;

        //     $this->inputs = $this->finishedGood->details->toArray();

        //     foreach ($this->finishedGood->details as $key => $detail) {
        //         $this->product_id[$key] = $detail->product_id;
        //         $this->qty[$key] = $detail->qty;
        //         $this->unit[$key] = $detail->unit;
        //     }
        // }
    }

    protected array $rules = [
        'pres_name' => 'nullable',
        'pres_by' => 'nullable',
        'medicine_admin' => 'nullable',
        'medicine_dose' => 'nullable',
        'medicine_route' => 'nullable',
    ];

    public function update()
    {
        // $this->service->update($this->finishedGood, $this->validate());
        // $this->dispatchBrowserEvent('notify');
        // $this->redirectRoute('stock-receive.create');
    }

    public function render()
    {
        return view('livewire.prescription-create');
    }
}
