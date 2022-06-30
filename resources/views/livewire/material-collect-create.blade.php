<div class="tab-pane active" id="case-histroy" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Select Name</label>
                        <x-input-select wireModel="collected_for" :records="$users" targetColumn="title" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Select Date</label>
                        <x-input-text wireModel="date" type="date"></x-input-text>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Warehouse (Materials Taken From)</label>
                        <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <label class="form-label">Note</label>
                        <x-input-textarea wireModel="note" rows="1" placeholder="Enter Note">
                        </x-input-textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Produce Product</label>
                        <select class="form-control form-select" wire:model="produce_product_id">
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
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Will Produce</label>
                        <x-input-text wireModel="will_produce"></x-input-text>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 p-0">
                    <div class="card">
                        <div class="card-body">
                            <h2 class=" text-center mb-4">Raw Material Lists</h2>
                            <form class="repeater" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-4 p-0 pe-1">
                                        <label for="name">Category Name</label>
                                    </div>
                                    <div class="col-lg-4 p-0 pe-1">
                                        <label for="product">Avl Stock</label>
                                    </div>
                                    <div class="col-lg-4 p-0 pe-1">
                                        <label for="total">Quantity</label>
                                    </div>
                                </div>
                                <div data-repeater-list="group-a">
                                    @foreach ($inputs as $key => $item)
                                    <div data-repeater-item class="row">
                                        <div class="col-lg-4 d-flex p-0 pe-1 pb-1 align-items-center">
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
                                        <div class="col-lg-4 p-0 pe-1 pb-1">
                                            <x-input-text wireModel="avl_stock.{{$key}}" type="number" :readOnly="true">
                                            </x-input-text>
                                        </div>
                                        <div class="col-lg-4 p-0 pe-1 pb-1 d-flex">
                                            <x-input-text wireModel="qty.{{$key}}" type="number">
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
                                </div>
                                <div class="ms-2">
                                    @if (!($this->mode == 'show'))
                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                        value="Add" wire:click="addMore()" />

                                    @endif
                                </div>
                            </form>
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
                </div>
            </div>
        </div>
    </div>
</div>