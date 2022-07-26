<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Arr;
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
    public $error;

    public function addMore(): void
    {
        $this->numberOfItems += 1;
        $this->inputs[]      = $this->numberOfItems;

        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }

    public function removeItem($key)
    {
        unset($this->inputs[$key]);
        $filtered = Arr::except($this->inputs, $key);
        [$keys, $values] = Arr::divide($filtered);
        $this->inputs = $values;


        if (isset($this->product_id[$key])) {
            unset($this->product_id[$key]);
            $filtered = Arr::except($this->product_id, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->product_id = $values;
        }

        if (isset($this->available_qty[$key])) {
            unset($this->available_qty[$key]);
            $filtered = Arr::except($this->available_qty, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->available_qty = $values;
        }

        if (isset($this->qty[$key])) {
            unset($this->qty[$key]);
            $filtered = Arr::except($this->qty, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->qty = $values;
        }

        if (isset($this->vat[$key])) {
            unset($this->vat[$key]);
            $filtered = Arr::except($this->vat, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->vat = $values;
        }

        if (isset($this->sub_total[$key])) {
            unset($this->sub_total[$key]);
            $filtered = Arr::except($this->sub_total, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->sub_total = $values;
        }

        if (isset($this->price[$key])) {
            unset($this->price[$key]);
            $filtered = Arr::except($this->price, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->price = $values;
        }

        if (isset($this->discount[$key])) {
            unset($this->discount[$key]);
            $filtered = Arr::except($this->discount, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->discount = $values;
        }

        if (isset($this->budget_head_id[$key])) {
            unset($this->budget_head_id[$key]);
            $filtered = Arr::except($this->budget_head_id, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->budget_head_id = $values;
        }

        if (isset($this->budget_sub_head_id[$key])) {
            unset($this->budget_sub_head_id[$key]);
            $filtered = Arr::except($this->budget_sub_head_id, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->budget_sub_head_id = $values;
        }

        if (isset($this->amount[$key])) {
            unset($this->amount[$key]);
            $filtered = Arr::except($this->amount, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->amount = $values;
        }

        if (isset($this->total_discount))
            $this->total_discount = array_sum($this->discount);

        if (isset($this->total_item))
            $this->total_item = array_sum($this->product_id);

        if (isset($this->total_cost))
            $this->total_cost = array_sum($this->sub_total);
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
