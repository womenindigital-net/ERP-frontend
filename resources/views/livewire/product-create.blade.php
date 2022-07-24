<div>
    <div class="row">
        <div class="col-6 d-flex">
            <label for="example-text-input" class="col-md-3 col-form-label">Code</label>
            <div class="col-md-8">
                <x-input-text name="code" placeholder="Code"></x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex">
            <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-8">
                <x-input-text name="name" placeholder="Name"></x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex pt-2 pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
            <div class="col-md-8">
                <x-input-textarea name="description" rows=1 placeholder="Description">
                </x-input-textarea>
            </div>
        </div>
        <div class="col-6 d-flex pt-2 pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Type</label>
            <div class="col-md-8">
                <x-input-select name="type" :records="[]" />
            </div>
        </div>
        <div class="col-6 d-flex  pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Category</label>
            <div class="col-md-8">
                <x-input-select name="category" :records="[]" />
            </div>
        </div>
        <div class="col-6 d-flex  pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Measurement</label>
            <div class="col-md-8">
                <x-input-select name="measurement" :records="[]" />
            </div>
        </div>
        <div class="col-6 d-flex pb-4">
            <label for="example-text-input" class="col-md-3 col-form-label">Reorder Quantity</label>
            <div class="col-md-8">
                <x-input-text type="number" name="reorder_quantity" placeholder="Reorder Quantity">
                </x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex">
            <label for="example-text-input" class="col-md-3 col-form-label">Image</label>
            <div class="col-md-8">
                <div>
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>

                            <h4>Please uploade product Image.</h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 d-flex">
            <label for="example-datetime-local-input" class=" pe-2 col-form-label">
                <h4 class="pb-0 mb-0 ">Is Sale Item:</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                <input class="form-check-input" id="sell" type="checkbox" name="container">
            </div>
        </div>
        <div class="col-4 d-flex ">
            <label for="example-datetime-local-input" class="pe-2 col-form-label">
                <h4 class="pb-0 mb-0">Is Purchase Item:</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                <input class="form-check-input" id="cost" type="checkbox" name="container">
            </div>
        </div>
        <div class="col-4 d-flex">
            <label for="example-datetime-local-input" class=" pe-2 col-form-label">
                <h4 class="pb-0 mb-0">Is Expirable Item:</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                <input class="form-check-input" id="expiry" type="checkbox" name="container">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 pb-4 ">
            <div class="hide_sell">
                <label for="example-text-input" class="col-form-label">Sell Price</label>
                <x-input-text type="number" name="sell_price" placeholder="Sell Price">
                </x-input-text>
            </div>
        </div>
        <div class="col-4 pb-4 ">
            <div class="hide_cost">
                <label for="example-text-input" class=" col-form-label">Cost Price</label>
                <x-input-text name="cost_price" type="number" placeholder="Cost Price Here">
                </x-input-text>
            </div>
        </div>
        <div class="col-4 pb-4 ">
            <div class="hide_expiry">
                <label for="example-text-input" class=" col-form-label ">Expiry Alert</label>
                <x-input-text type="number" name="expiry_alert" placeholder="Expiry Alert">
                </x-input-text>
            </div>
        </div>
    </div>
    <h4 class="card-title mb-4">Product BOM</h4>
    <form class="repeater" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-2 p-0 pe-1">
                <label for="sl">SL</label>
                <label for="p_category">P. Category</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="product">Product</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="measure">Measure Unit</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="quality">Quantity</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="price">Price</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="cost">Cost Price</label>
            </div>
        </div>
        <div data-repeater-list="group-a">
            <div data-repeater-item class="row removeRow">
                <div class=" col-lg-2 d-flex p-0 pe-1 pb-1">
                    <span class="pe-2 pb-1">01</span>
                    <div>
                        <x-input-select name="p_category" :records="[]" />
                    </div>
                </div>
                <div class=" col-lg-2 p-0 pe-1 pb-1">
                    <x-input-textarea name="product" rows=1 placeholder="Product">
                    </x-input-textarea>

                </div>
                <div class=" col-lg-2 p-0 pe-1 pb-1">
                    <x-input-text name="measure" placeholder="Measure Unit">
                    </x-input-text>

                </div>
                <div class=" col-lg-2 p-0 pe-1 pb-1">
                    <x-input-text name="quantity" placeholder="Quantity">
                    </x-input-text>
                </div>
                <div class=" col-lg-2 p-0 pe-1 pb-1">
                    <x-input-text name="measure" type="number" placeholder="Price">
                    </x-input-text>
                </div>
                <div class="col-lg-2 p-0 pe-1 pb-1 d-flex">
                    <x-input-text name="cost" type="number" placeholder="Cost">
                    </x-input-text>
                    <div>
                        <button class="btn btn-outline-danger ms-2 removeBtn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <input data-repeater-create type="button" class="btn btn-outline-success mt-3 px-4 mt-lg-0"
            value="Add" />
    </form>
    <div class="row pt-3">
        <div class="col-6 d-flex pb-3 ">
            <label for="example-datetime-local-input" class=" pe-2 col-form-label">
                <h4 class="pb-0 mb-0 ">Sale price in Percent</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                <input class="form-check-input" id="sell" type="checkbox" name="container">
            </div>
        </div>
        <div class="col-6 d-flex pb-3">
            <label for="example-datetime-local-input" class="pe-2 col-form-label">
                <h4 class="pb-0 mb-0">Is Active:</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                <input class="form-check-input" id="cost" type="checkbox" name="container">
            </div>
        </div>
    </div>
    <div class="modal-footer me-5">
        <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal"
            data-bs-target=".social-communication-view"> Save</button>
    </div>
</div>
