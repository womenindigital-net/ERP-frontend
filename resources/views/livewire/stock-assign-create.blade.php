<div class="tab-pane active" id="product_details" role="tabpanel">
    <form method="post" action="{{route('stock-assign.store')}}">
        @csrf
        <!-- form start -->
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Warehouse</label>
                    <x-input-select name="warehouse_id" :records="$warehouses" targetColumn="title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Date</label>
                    <x-input-text name="date" type="date" placeholder="dd M, yyyy" />
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
                                <div class="col-lg-3 p-0 pe-1">
                                    <label for="product">Product</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="product">Product Quantity</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="quality">Depreciation Percent</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="total">Warehouse</label>
                                </div>
                            </div>
                            <div data-repeater-list="details">
                                <div data-repeater-item class="row removeRow">

                                    <div class="col-lg-3 d-flex p-0 pe-1 pb-1">
                                        <x-input-select name="product_id" :records="$products" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-text name="qty" type="number" placeholder="" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-text name="depreciation_percentage" placeholder="" />
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                        <x-input-select name="warehouse_id" :records="$warehouses"
                                            targetColumn="title" />
                                        <button class="btn btn-danger ms-2 removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                value="Add" />
                        </div>
                        <!-- 7th row start  -->
                        <div class="row mt-3 justify-content-center ">
                            <div class="col-lg-6">
                                <div class="row mb-2">
                                    <div class="col-10">
                                        <label class="text-end form-label">Note</label>
                                        <x-input-textarea name="note" cols="5" placeholder="Enter Note ..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 7th row end  -->
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
                <button class="btn btn-success w-100">Save</button>
            </div>
        </div>
        <!-- end row -->
    </form>
</div>