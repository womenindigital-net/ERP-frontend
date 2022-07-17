<div>

    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <x-input-select wireModel="supplier_id" :records="$suppliers" additional="mobile">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Payment Date</label>
                <x-input-text wireModel="date" type="date"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Invoice (Purchase
                    Order)</label>
                <x-input-select wireModel="purchase_id" :records="$purchaseOrder" targetColumn="invoice_no">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Remarks</label>
                <x-input-text wireModel="remark" type="text"></x-input-text>
            </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Account</label>
                <x-input-text wireModel="remark" type="text"></x-input-text>
            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Note</label>
                <x-input-textarea wireModel="note" rows="1"></x-input-textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Cash Pay</label>
                <x-input-text wireModel="cash"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Bank Account</label>
                <x-input-select wireModel="bank_account_id" :records="$bankAccount" targetColumn="account_name">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Cheque</label>
                <x-input-select wireModel="cheque_id" :records="$cheque" targetColumn="title">
                </x-input-select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="validationCustom02" class="form-label">Amount</label>
            <x-input-text wireModel="cheque_amount" type="text"></x-input-text>
        </div>
    </div>
    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
            <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!($this->mode) == 'show')
            <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
            <a href="{{route('supplier-payment.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
</div>