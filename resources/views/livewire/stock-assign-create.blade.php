<div class="tab-pane active" id="product_details" role="tabpanel">


    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text wireModel="date" type="date" placeholder="dd M, yyyy" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="text-end form-label">Note</label>
                <x-input-textarea wireModel="note" rows="1" placeholder="Enter Note ..." />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h2 class=" text-center mb-4">All Products</h2>
                    <div class="repeater">
                        <div class="row">
                            <div class="col-lg-3 p-0 pe-1">
                                <label>Product</label>
                            </div>
                            <div class="col-lg-4 p-0 pe-1">
                                <label>Product Details</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label>Depreciation Percent</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label>Assigned To</label>
                            </div>
                        </div>
                        <div data-repeater-list="details">
                            @foreach ($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class="col-lg-3 p-0 pe-1 pb-1">
                                    <select class="form-control form-select" wire:model="product_id.{{$key}}">
                                        <option>--Select--</option>
                                        @foreach($products as $product)
                                        <optgroup label="{{$product['name']}}">
                                            @foreach($product['children'] as $childCourse)
                                            <option value="{{$childCourse['id']}}">{{$childCourse['name']}}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" col-lg-4 p-0 pe-1 pb-1">
                                    <x-input-textarea wireModel="product_details.{{$key}}" rows="1" placeholder="" />
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="depreciation_percent.{{$key}}" placeholder="" />
                                </div>
                                <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-select wireModel="assigned_to.{{$key}}" :records="$users" />
                                    @if (!($this->mode == 'show'))
                                    <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                        wire:click="removeRow({{ $key }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                        </div>
                        @if (!($this->mode == 'show'))
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                            wire:click="addMore()" />

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-md-2">
            @if($this->mode == 'edit')
            <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!($this->mode == 'show'))
            <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @endif
        </div>
    </div>
    <!-- end row -->
</div>