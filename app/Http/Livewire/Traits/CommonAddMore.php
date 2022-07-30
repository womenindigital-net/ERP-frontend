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
        if (isset($this->available_Quantity[$key])) {
            unset($this->available_Quantity[$key]);
            $filtered = Arr::except($this->available_Quantity, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->available_Quantity = $values;
        }
        if (isset($this->transfer_quantity[$key])) {
            unset($this->transfer_quantity[$key]);
            $filtered = Arr::except($this->transfer_quantity, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->transfer_quantity = $values;
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
        if (isset($this->unit[$key])) {
            unset($this->unit[$key]);
            $filtered = Arr::except($this->unit, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->unit = $values;
        }

        if (isset($this->budget_sub_head_id[$key])) {
            unset($this->budget_sub_head_id[$key]);
            $filtered = Arr::except($this->budget_sub_head_id, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->budget_sub_head_id = $values;
        }

        if (Arr::exists($this->amount, $key)) {
            unset($this->amount[$key]);
            $filtered = Arr::except($this->amount, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->amount = $values;
        }
        if (isset($this->account_no[$key])) {
            unset($this->account_no[$key]);
            $filtered = Arr::except($this->account_no, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->account_no = $values;
        }
        if (isset($this->account_particulars[$key])) {
            unset($this->account_particulars[$key]);
            $filtered = Arr::except($this->account_particulars, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->account_particulars = $values;
        }
        if (isset($this->debit[$key])) {
            unset($this->debit[$key]);
            $filtered = Arr::except($this->debit, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->debit = $values;
        }
        if (isset($this->credit[$key])) {
            unset($this->credit[$key]);
            $filtered = Arr::except($this->credit, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->credit = $values;
        }
        if (isset($this->course_id[$key])) {
            unset($this->course_id[$key]);
            $filtered = Arr::except($this->course_id, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->course_id = $values;
        }
        if (isset($this->credit[$key])) {
            unset($this->credit[$key]);
            $filtered = Arr::except($this->credit, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->credit = $values;
        }
        if (isset($this->exp_date[$key])) {
            unset($this->exp_date[$key]);
            $filtered = Arr::except($this->exp_date, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->exp_date = $values;
        }
        if (isset($this->received[$key])) {
            unset($this->received[$key]);
            $filtered = Arr::except($this->received, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->received = $values;
        }
        if (isset($this->return[$key])) {
            unset($this->return[$key]);
            $filtered = Arr::except($this->return, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->return = $values;
        }
        if (isset($this->receivable[$key])) {
            unset($this->receivable[$key]);
            $filtered = Arr::except($this->receivable, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->receivable = $values;
        }
        if (isset($this->stock_receive_qty[$key])) {
            unset($this->stock_receive_qty[$key]);
            $filtered = Arr::except($this->stock_receive_qty, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->stock_receive_qty = $values;
        }
        if (isset($this->serial[$key])) {
            unset($this->serial[$key]);
            $filtered = Arr::except($this->serial, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->serial = $values;
        }
        if (isset($this->total_stock[$key])) {
            unset($this->total_stock[$key]);
            $filtered = Arr::except($this->total_stock, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->total_stock = $values;
        }
        if (isset($this->stock_out[$key])) {
            unset($this->stock_out[$key]);
            $filtered = Arr::except($this->stock_out, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->stock_out = $values;
        }
        if (isset($this->avl_stock[$key])) {
            unset($this->avl_stock[$key]);
            $filtered = Arr::except($this->avl_stock, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->avl_stock = $values;
        }
        if (isset($this->depreciation_percent[$key])) {
            unset($this->depreciation_percent[$key]);
            $filtered = Arr::except($this->depreciation_percent, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->depreciation_percent = $values;
        }
        if (isset($this->assigned_to[$key])) {
            unset($this->assigned_to[$key]);
            $filtered = Arr::except($this->assigned_to, $key);
            [$keys, $values] = Arr::divide($filtered);
            $this->assigned_to = $values;
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
