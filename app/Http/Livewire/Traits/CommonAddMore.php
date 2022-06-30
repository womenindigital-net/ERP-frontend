<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Facades\Session;

trait CommonAddMore
{
    public $project_id;
    public $mode;
    public $warehouse_id;
    public $product_id;
    public $available_qty;
    public $qty;
    public $sub_total;
    public $note;
    public $price;
    public $discount;
    public array $inputs = [];
    public int $numberOfItems = 1;

    public function addMore()
    {
        $this->numberOfItems += 1;
        $this->inputs[] = $this->numberOfItems;
    }

    public function removeRow($key)
    {
        // dump($this->inputs);
        unset($this->inputs[$key]);
        // dd($this->inputs);
    }


    public function submit()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent('reload');
    }

    public function update()
    {
        $this->service->update($this->requisition, $this->validate());
        Session::flash('success');
        $this->redirect('requisition');
    }

    private function getTargetKey($name): bool|string
    {
        $extractedRecordName = explode('.', $name);
        return end($extractedRecordName);
    }
}
