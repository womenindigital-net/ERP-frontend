<div class="tab-pane active" id="case-histroy" role="tabpanel">
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Select Name</label>
                        <x-input-select wireModel="collected_for" :records="$users" targetColumn="title" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Select Date</label>
                        <x-input-text wireModel="date" type="date"></x-input-text>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Warehouse (Materials Taken From)</label>
                        <x-input-select wireModel="warehouser_id" :records="$warehouses" targetColumn="title" />
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
                                    <div class="col-lg-3 p-0 pe-1">
                                        <label for="name">Category Name</label>
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1">
                                        <label for="product">Avl Stock</label>
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1">
                                        <label for="total">Quantity</label>
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1">
                                        <label for="total">Produce Category</label>
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1">
                                        <label for="total">Produce Product</label>
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
                                                    <option value="{{$childCourse['id']}}">{{$childCourse['name']}}
                                                    </option>
                                                    @endforeach
                                                </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2 p-0 pe-1 pb-1">
                                            <p class="form-control m-0">25</p>
                                        </div>
                                        <div class="col-lg-2 p-0 pe-1 pb-1">
                                            <x-input-text name="qty" type="number">
                                            </x-input-text>
                                        </div>
                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                            <select id="formrow-inputState" class="form-select">
                                                <option selected="">Select</option>
                                                <option value="1">4 Water Purifier & 6 Fire Exti
                                                </option>
                                                <option value="2">AC (11)</option>
                                                <option value="3">Angel Chef Hot Kitchen
                                                </option>
                                                <option value="4">Anklet</option>
                                                <option value="5">Annual Anniversary</option>
                                                <option value="6">Annual Anniversary of PFDA - V
                                                </option>
                                                <option value="7">antivirus</option>
                                                <option value="8">Application Development
                                                </option>
                                                <option value="9">Art Finished Goods </option>
                                                <option value="10">Art Raw Materials </option>
                                                <option value="11">Art Training Materials
                                                </option>
                                                <option value="12">Asus Laptop </option>
                                                <option value="13">Attend meetings, Workshop,
                                                    Sem
                                                </option>
                                                <option value="14">BAKERY</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                            <select id="formrow-inputState" class="form-select">
                                                <option selected="">Select</option>
                                            </select>
                                            <button class="btn btn-danger btn-rounded ms-2">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="ms-2">
                                    <button data-repeater-create type="button"
                                        class="btn btn-success waves-effect waves-light">Add</button>
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