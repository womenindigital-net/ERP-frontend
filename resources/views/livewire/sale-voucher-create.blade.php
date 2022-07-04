<div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Customer</label>
                <x-input-select wireModel="customer_id" :records="$customers" additional="mobile" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text type="date" wireModel="date" placeholder="">
                </x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Ship to addr</label>
                <x-input-text wireModel="ship_to_address" placeholder="Enter ship to address here">
                </x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouses</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All product</h4>
                    <div class="repeater">
                        <div class="row">
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="product">Product</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="product">Available Quality </label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="quality">Quantity</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="total">Sub-total</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="discount">Price</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="subtotal">Discount</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            @foreach($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
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
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="available_qty.{{$key}}"></x-input-text>
                                </div>

                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="qty.{{$key}}"></x-input-text>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="sub_total.{{$key}}"></x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="price.{{$key}}"></x-input-text>
                                </div>
                                <div class=" col-lg-3 p-0 pe-1 pb-1 d-flex">
                                    <x-input-text type="text" wireModel="discount.{{$key}}"></x-input-text>
                                    <div>
                                        <button class="btn btn-danger ms-2 removeBtn" wire:click="removeItem({{$key}})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                            wire:click="addMore()" />
                    </div>
                    <!-- 5th row start -->
                    <div class="row justify-content-center pt-3">
                        <div class="col-lg-6">
                            <div class="row mb-4">
                                <div class="row">
                                    <label for="horizontal-firstname-input"
                                        class="col-4 text-end col-form-label text-end">Note</label>
                                    <div class="col-8">
                                        <x-input-text wireModel="note" placeholder="Enter reference if any">
                                        </x-input-text>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5th row end -->
                    <!-- 6th row start  -->
                    <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input"
                                    class="col-4 text-end col-form-label">Discount</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input"
                                    class="col-4 text-end col-form-label">Item</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">
                                    Cost</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">
                                    Paid</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 6th row end  -->
                    <!-- 7th row start  -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="row mb-2">
                                <label for="horizontal-firstname-input" class="col-3 text-end col-form-label">Cash
                                    Pay</label>
                                <div class="col-9">
                                    <x-input-text wireModel="cash" placeholder="Enter Cash Amount">
                                    </x-input-text>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.cheque-pay-livewire')
                    @include('partials.card-pay-livewire')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <button class="btn btn-danger w-100">Reset</button>
        </div>
        <div class="col-md-4">
            @if($this->mode == 'edit')
            <button class="btn btn-success w-100" wire:click="update()">Update</button>
            @else
            <button class="btn btn-success w-100" wire:click="submit()">Save</button>
            @endif
        </div>
    </div>
</div>