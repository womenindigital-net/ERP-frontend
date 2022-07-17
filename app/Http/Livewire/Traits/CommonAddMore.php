<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Facades\Session;

trait CommonAddMore
{
    public $mode;
    public $project_id;
    public $warehouse_id;
    public $product_id;
    public $available_qty;
    public $qty;
    public $sub_total;
    public $note;
    public $price;
    public $discount;
    public $date;
    public array $inputs = [];
    public int $numberOfItems = 1;

    public function addMore()
    {
        $this->numberOfItems += 1;
        $this->inputs[]      = $this->numberOfItems;
    }

    public function removeItem($key)
    {
        unset($this->inputs[$key]);

        if (isset($this->product_id[$key]))
            unset($this->product_id[$key]);

        if (isset($this->available_qty[$key]))
            unset($this->available_qty[$key]);

        if (isset($this->qty[$key]))
            unset($this->qty[$key]);

        if (isset($this->vat[$key]))
            unset($this->vat[$key]);

        if (isset($this->sub_total[$key]))
            unset($this->sub_total[$key]);

        if (isset($this->price[$key]))
            unset($this->price[$key]);

        if (isset($this->discount[$key]))
            unset($this->discount[$key]);

        $this->total_discount = array_sum($this->discount);
        $this->total_item = array_sum($this->product_id);
        $this->total_cost = array_sum($this->sub_total);
    }
    
    public function removeRow($key)
    {
        unset($this->inputs[$key]);

        if (isset($this->product_id[$key]))
            unset($this->product_id[$key]);

        if (isset($this->available_qty[$key]))
            unset($this->available_qty[$key]);

        if (isset($this->qty[$key]))
            unset($this->qty[$key]);

        if (isset($this->vat[$key]))
            unset($this->vat[$key]);

        if (isset($this->sub_total[$key]))
            unset($this->sub_total[$key]);

        if (isset($this->price[$key]))
            unset($this->price[$key]);

        if (isset($this->discount[$key]))
            unset($this->discount[$key]);
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