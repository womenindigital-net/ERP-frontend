<div>
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
                <label class="form-label">Payment Type</label>
                <x-input-select wireModel="payment_type_id" :records="$paymentType" targetColumn="title">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6" id="from_account">
            <div class="mb-3">
                <label class="form-label">From Account</label>
                <x-input-select wireModel="from_account" :records="$bankAccount" targetColumn="account_name">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6" id="to_account">
            <div class="mb-3">
                <label class="form-label">To Account</label>
                <x-input-select wireModel="to_account" :records="$bankAccount" targetColumn="account_name">
                </x-input-select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Amount</label>
                <x-input-text wireModel="amount" placeholder="Enter Amount here"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Note</label>
                <x-input-textarea rows="1" wireModel="note" placeholder="Enter Purpose here">
                </x-input-textarea>
            </div>
        </div>
    </div>
  <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
            <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!($this->mode) == 'show')
            <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
            <a href="{{route('direct-payment.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
</div>