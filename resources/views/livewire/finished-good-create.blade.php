<div class="tab-pane active" id="finished_good" role="tabpanel">
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
                <x-input-text wireModel="date" type="date"></x-input-text>
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
                                <label for="product">Unit</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="total">Quantity</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            @foreach ($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class="col-lg-4 d-flex p-0 pe-1 pb-1 align-items-center">
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
                                    <x-input-select :records="$unitType" wireModel="unit.{{ $key }}" />
                                </div>
                                <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text type="number" wireModel="qty.{{ $key }}"></x-input-text>
                                    <button class="btn btn-danger ms-2 removeBtn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                            @endforeach
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                                wire:click="addMore()" />
                        </div>

                    </form>
                    <!-- 7th row start  -->
                    <div class="row mt-3 justify-content-center ">
                        <div class="col-lg-6">
                            <div class="row mb-2">
                                <label for="horizontal-firstname-input"
                                    class="col-2 text-end col-form-label">Note</label>
                                <div class="col-10">
                                    <x-input-textarea wireModel="note" placeholder="Enter Note">
                                    </x-input-textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 7th row end  -->
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