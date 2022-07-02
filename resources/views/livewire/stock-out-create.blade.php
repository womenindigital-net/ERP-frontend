<div class="tab-pane active" id="stock_out" role="tabpanel">
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
                <label class="form-label">Warehouse</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text wireModel="date" type="date" placeholder="dd M, yyyy"></x-input-text>
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
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 p-0 pe-1">
                                <label for="name">Product</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="product">Total Stock</label>
                            </div>
                            <div class="col-lg-5 p-0 pe-1">
                                <label for="quality">Stock Out</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            @foreach ($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class="col-lg-4 d-flex p-0 pe-1 pb-1">
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
                                    <x-input-text wireModel="total_stock.{{ $key }}" :readOnly="true">
                                    </x-input-text>
                                </div>
                                <div class="col-lg-5 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text wireModel="stock_out.{{ $key }}" type="number" placeholder="0">
                                    </x-input-text>
                                    @if (!($this->mode == 'show'))
                                    <button type="button" class="btn mb-1 btn-danger waves-effect waves-light removeBtn"
                                        wire:click="removeRow({{ $key }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @if (!($this->mode == 'show'))
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                                wire:click="addMore()" />

                            @endif
                        </div>
                    </form>
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
</div>