<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- form start -->
                <div class="row pb-5">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Project</label>
                            <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
                        </div>
                        <div class="mb-3">
                            <label>Date</label>
                            <x-input-text wireModel="date" type="date"></x-input-text>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Warehouse</label>
                            <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Reveive Type</label>
                            <x-input-select :records="$receiveTypes" wireModel="type" />
                        </div>
                        <div class="mb-3">
                            <label class="text-end form-label">Note</label>
                            <x-input-textarea wireModel="note" rows="1" placeholder="Enter Note ..." />
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Invoice (Purchase
                                Order)</label>
                            <x-input-select wireModel="purchase_id" :records="$purchaseOrder" targetColumn="invoice_no">
                            </x-input-select>
                            <p>
                                @foreach ($purchaseProduct as $item )
                                <label class="form-label">{{ $item->product->name }}</label>, 
                                @endforeach
                            </p>
                        </div>
                        
                    </div>
                </div>
                <!--form end -->
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card">
                            <div class="card-body">
                                <h2 class=" text-center mb-4">All Products</h2>
                                <div class="row">
                                    <div class="col-lg-2 p-0">
                                        <label>Product</label>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <label>Exp. Date</label>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <label>Avl Qty</label>
                                    </div>
                                    {{-- @if($purchaseInput) --}}
                                    <div class="col-lg-1 p-0">
                                        <label>Received</label>
                                    </div>
                                    {{-- @endif --}}
                                    {{-- @if($receiveInput) --}}
                                    <div class="col-lg-1 p-0">
                                        <label>Return</label>
                                    </div>
                                    {{-- @endif --}}
                                    <div class="col-lg-2 p-0">
                                        <label>Stock Receive Qty.</label>
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <label>Serial</label>
                                    </div>
                                </div>
                                <div data-repeater-list="group-a">
                                    @foreach ($inputs as $key => $item)
                                    <div data-repeater-item class="row removeRow">
                                        <div class="col-lg-2 p-0 pe-1 pb-2 align-items-center ">
                                            <select class="form-control form-select" wire:model="product_id.{{$key}}">
                                                <option>--Select--</option>
                                                @foreach($products as $product)
                                                <optgroup label="{{$product['name']}}">
                                                    @foreach($product['children'] as $childCourse)
                                                    <option value="{{$childCourse['id']}}">{{$childCourse['name']}}
                                                    </option>
                                                    @endforeach
                                                </optgroup>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-2 p-0 pe-1">
                                            <x-input-text wireModel="exp_date.{{ $key }}" type="date">
                                            </x-input-text>
                                        </div>
                                        <div class="col-lg-2 p-0 pe-1">
                                            <x-input-text wireModel="available_qty.{{ $key }}" type="number"
                                                :readOnly='true'>
                                            </x-input-text>
                                        </div>
                                        {{-- @if($purchaseInput) --}}
                                        <div class="col-lg-1 p-0 pe-1">
                                            <x-input-text wireModel="received.{{ $key }}" type="number">
                                            </x-input-text>
                                        </div>
                                        {{-- @endif --}}
                                        {{-- @if($receiveInput) --}}
                                        <div class="col-lg-1 p-0 pe-1">
                                            <x-input-text wireModel="return.{{ $key }}" type="number">
                                            </x-input-text>
                                        </div>
                                        {{-- @endif --}}
                                        <div class="col-lg-2 p-0 pe-1">
                                            <x-input-text wireModel="stock_receive_qty.{{ $key }}" type="number">
                                            </x-input-text>
                                        </div>
                                        <div class="col-lg-2 d-flex">
                                            <x-input-text wireModel="serial.{{ $key }}" type="number">
                                            </x-input-text>
                                            @if (!($this->mode == 'show'))
                                            <button type="button"
                                                class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                                wire:click="removeRow({{ $key }})">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                    @if (!($this->mode == 'show'))
                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                        value="Add" wire:click="addMore()" />

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <a href="{{route('stock-receive.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
</div>