<div class="tab-pane active" id="stock_transfer" role="tabpanel">
    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Issue Type</label>
                <x-input-select wireModel="issue_type" :records="$issueType" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Reference</label>
                <x-input-text wireModel="reference" placeholder="Refference no here"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Issue Date</label>
                <x-input-text wireModel="date" type="date"></x-input-text>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse From</label>
                <x-input-select wireModel="warehouse_id_from" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse to</label>
                <x-input-select wireModel="warehouse_id_to" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="name">Product</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="product">Available Quantity</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="product">Transfer Quantity</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="total"> Serial</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">

                            @foreach ($inputs as $key => $item)
                            <div data-repeater-item class="row">
                                <div class="col-lg-3 d-flex p-0 pe-1 pb-1 align-items-center">
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
                                <div class=" col-lg-3 p-0 pe-1 pb-1">
                                    <x-input-text type="number" :readOnly="true"
                                        wireModel="available_Quantity.{{ $key }}">
                                    </x-input-text>
                                </div>
                                <div class=" col-lg-3 p-0 pe-1 pb-1">
                                    <x-input-text type="number" wireModel="transfer_quantity.{{ $key }}"></x-input-text>
                                </div>
                                <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text type="number" wireModel="serial.{{ $key }}"></x-input-text>
                                    <button class="btn btn-danger ms-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                            @endforeach
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                                wire:click="addMore()" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        @if($this->mode == 'edit')
        <button class="btn btn-success w-100" wire:click="update()">Update</button>
        @else
        <button class="btn btn-success w-100" wire:click="submit()">Save</button>
        @endif
    </div>
    <!-- end row -->
</div>