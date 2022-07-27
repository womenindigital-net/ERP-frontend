<div>
    <!-- form start -->
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select :records="$projects" wireModel="project_id" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Trans.Amount</label>
                <x-input-text wireModel="transaction_amount" placeholder="Trans.Amount" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label>Vaucher date</label>
                <x-input-text type="date" wireModel="voucher_date" placeholder="dd M, yyyy" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Particulars</label>
                <x-input-text wireModel="particulars" placeholder="Particulars" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="validationCustom04" class="form-label">Reference</label>
                <x-input-text wireModel="reference" placeholder="Reference" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <h2 class=" text-center mb-4">Posting Transaction Details</h2>
                    </div>
                    <div class="repeater">
                        <div class="row">
                            <div class="col-lg-3  p-0 pe-1">
                                <label for="wireModel">Acc. Number</label>
                            </div>
                            <div class="col-lg-4  p-0 pe-1">
                                <label for="email">Acc. Particular</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="subject">Debit</label>
                            </div>
                            <div class="col-lg-3  p-0 pe-1">
                                <label for="resume">Credit</label>
                            </div>
                        </div>
                        <div data-repeater-list="journal">
                            @foreach ($inputs as $key => $item)
                                <div data-repeater-item class="row removeRow">
                                    <div class=" col-lg-3 p-0 p-0 pe-1 pb-1">
                                        <x-input-text wireModel="account_no.{{ $key }}" placeholder="Acc. Number" />
                                    </div>

                                    <div class=" col-lg-4 p-0 pe-1 pb-1">
                                        <x-input-text wireModel="account_particulars.{{ $key }}" placeholder="Acc. Particular" />
                                    </div>

                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-text wireModel="debit.{{ $key }}" placeholder="Debit" />
                                    </div>

                                    <div class=" col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                        <x-input-text wireModel="credit.{{ $key }}" placeholder="Credit" />
                                        <div onclick="this.parentNode.parentNode.remove(this)">
                                            <button class="btn btn-danger ms-2 removeBtn" type="button">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if (!($this->mode == 'show'))
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                value="Add" wire:click="addMore()" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
                <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!$this->mode == 'show')
                <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
                <a href="{{ route('stock-out.create') }}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            @endif
        </div>
    </div>
    <!-- end row -->
</div>
