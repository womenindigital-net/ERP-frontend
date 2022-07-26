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
    private JournalService $service;
    protected array $addMoreItems = ['account_no', 'account_particulars', 'debit', 'credit'];

    public function boot(
        ProjectRepository $projectRepository,
        JournalRepository $journalRepo,
        JournalService $service,
    ) {
        $this->projectRepo = $projectRepository;
        $this->journalRepo = $journalRepo;
        $this->service = $service;

        $this->inputs[] = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }



    public $project_id;
    public $transaction_amount;
    public $voucher_date;
    public $particulars;
    public $reference;
    public $account_no;
    public $account_particulars;
    public $debit;
    public $credit;




    protected array $rules = [
        'project_id' => 'nullable',
        'transaction_amount' => 'nullable',
        'voucher_date' => 'nullable',
        'particulars' => 'nullable',
        'reference' => 'nullable',
        'account_no.*' => 'nullable',
        'account_particulars.*' => 'nullable',
        'debit.*' => 'nullable',
        'credit.*' => 'nullable',
    ];


    public function render()
    {
        $data = [
            'projcts' => $this->projectRepo->getData(),
        ];
        return view('livewire.journal-create', $data);
    }
}
