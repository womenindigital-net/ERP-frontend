<div class="tab-pane active" id="stock_recive" role="tabpanel">

    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <form action="">
                    <div class="text-center">
                        <h4 class="mb-4">Product BOM</h4>
                    </div>
                    <!-- form start -->
                    <div class="row pb-5">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Reveive Type</label>
                                <x-input-select :records="$receiveTypes" wireModel="type"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if($purchaseAble)
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Purchase</label>
                                <x-input-text wireModel="purchase" placeholder="Purchase no here">
                                </x-input-text>
                            </div>
                            @elseif($receiveAble)
                            <div class="mb-3 d-none" id="return">
                                <label for="validationCustom02" class="form-label">Return</label>
                                <x-input-text wireModel="return" placeholder="Return here">
                                </x-input-text>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Date</label>
                                <x-input-text wireModel="date" type="date"></x-input-text>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Warehouse</label>
                                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
                            </div>
                        </div>
                    </div>
                    <!--form end -->
                    <div class="row">
                        <div class="col-lg-2 p-0">
                            <label>Product</label>
                        </div>
                        <div class="col-lg-2 p-0">
                            <label>Exp. Date</label>
                        </div>
                        <div class="col-lg-1 p-0">
                            <label>Quantity</label>
                        </div>
                        <div class="col-lg-1 p-0">
                            <label>Received</label>
                        </div>
                        <div class="col-lg-1 p-0">
                            <label>Return</label>
                        </div>
                        <div class=" col-lg-1 p-0">
                            <label>Receiveble</label>
                        </div>
                        <div class="col-lg-2 p-0">
                            <label>Stock Receive Qty.</label>
                        </div>
                        <div class="col-lg-1 p-0">
                            <label>Serial</label>
                        </div>
                    </div>
                    <div data-repeater-list="group-a">
                        @foreach ($inputs as $key => $item)
                        <div data-repeater-item class="row removeRow">
                            <div class="col-lg-2  d-flex p-0 pe-1 pb-2 align-items-center ">
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

                            <div class="col-lg-2 p-0 pe-1">
                                <x-input-text wireModel="exp_date.{{ $key }}" type="date"></x-input-text>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <x-input-text type="number" wireModel="qty.{{ $key }}" placeholder="0">
                                </x-input-text>
                            </div>

                            <div class="col-lg-1 p-0 pe-1">
                                <x-input-text wireModel="received.{{ $key }}" placeholder="0"></x-input-text>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <x-input-text wireModel="return.{{ $key }}" placeholder="0"></x-input-text>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <x-input-text wireModel="receivable.{{ $key }}" placeholder="0"></x-input-text>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <x-input-text wireModel="stock_receive_qty.{{ $key }}"></x-input-text>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <x-input-text type="number" wireModel="serial.{{ $key }}"></x-input-text>
                            </div>
                            <div class="mb-2 col-lg-1 p-0 pe-1">
                                <button type="button" class="btn btn-danger waves-effect waves-light removeBtn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        @endforeach
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                            wire:click="addMore()" />
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        {{-- <div class="col-md-4">
            <input type="reset" class="btn btn-danger  waves-effect waves-light w-100" value="Reset">
        </div> --}}
        <div class="col-md-4">
            @if($this->mode == 'edit')
            <button class="btn btn-success w-100" wire:click="update()">Update</button>
            @else
            <button class="btn btn-success w-100" wire:click="submit()">Save</button>
            @endif
        </div>
    </div>
</div>
