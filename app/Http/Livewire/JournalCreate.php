<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\JournalRule;
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
    private JournalRepository $repo;
    private JournalService $service;
    protected array $addMoreItems = ['account_no', 'account_particulars', 'debit', 'credit'];

    public function boot(
        ProjectRepository $projectRepository,
        JournalRepository $repo,
        JournalService $service,
    ) {
        $this->projectRepo = $projectRepository;
        $this->repo = $repo;
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
        'transaction_amount' => 'required',
        'voucher_date' => 'nullable',
        'particulars' => 'nullable',
        'reference' => 'nullable',
        'account_no.*' => 'required',
        'account_particulars.*' => 'nullable',
        'debit.*' => 'nullable',
        'credit.*' => 'nullable',
    ];



    // public function updated($name, $value)
    // {
    // if (str_starts_with($name, 'debit') | str_starts_with($name, 'credit')) {
    //     $key = explode('.',$name);
    //     // dump('credit.'.$key[1]);
    //     if($name == 'credit.'.$key[1]){
    //         return $this->addError($name, 'message');
    //     }
    //     // dd($key[0]);
    // }

    // if (str_starts_with($name, 'bank_account_id')) {
    //     $detail =  $this->bankAccRepo->getCheque($value);
    //     $this->cheque =  $detail->chequeBook;
    // }
    // }



    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
        ];
        return view('livewire.journal-create', $data);
    }
}
