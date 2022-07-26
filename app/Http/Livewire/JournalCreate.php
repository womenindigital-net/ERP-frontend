<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\JournalService;
use App\Repositories\JournalRepository;
use App\Repositories\ProjectRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Http\Livewire\Traits\CommonListElements;

class JournalCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    
    private ProjectRepository $projectRepo;
    private JournalRepository $journalRepo;
    // protected array $addMoreItems = ['code', 'name', 'type'];

    public function boot(
        ProjectRepository $projectRepository,
        JournalRepository $journalRepo,
    ) {
        $this->projectRepo = $projectRepository;
        $this->journalRepo = $journalRepo;

    }



    public $project_id;
    public $transaction_amount;
    public $voucher_date;
    public $particulars;
    public $reference;
    public $account_no;
    public $is_approved;
   



    protected array $rules = [
        'project_id' => 'nullable',
        'transaction_amount' => 'nullable',
        'voucher_date' => 'nullable',
        'particulars' => 'nullable',
        'account_no' => 'nullable',
        'reference' => 'nullable',
        'is_approved' => 'nullable',
    ];


    public function render()
    {
        $data = [
            'projcts' => $this->projectRepo->getData(),
        ];
        return view('livewire.journal-create',$data);
    }
}
