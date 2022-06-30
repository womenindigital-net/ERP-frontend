<div class="tab-pane active" id="stock_out" role="tabpanel">
    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <select class="form-control select2">
                    <option>--Select--</option>
                    <option value="1">Governing Office</option>
                    <option value="2">Operations</option>
                    <option value="3">Administration</option>
                    <option value="4">Finance and Accounts Section</option>
                    <option value="5">Procurement Section</option>
                    <option value="6">Inventory Management</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <select class="form-control select2">
                    <option>--Select--</option>
                    <option value="AK">Canteen Logistic Materials</option>
                    <option value="HI">Canteen Raw material</option>
                    <option value="CA">Office Outlet</option>
                    <option value="NV">Office Programme</option>
                    <option value="OR">Office Store</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text name="name" type="date" placeholder="dd M, yyyy"></x-input-text>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All product</h4>
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
                            <div data-repeater-item class="row removeRow">
                                <div class="col-lg-4 d-flex p-0 pe-1 pb-1">
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected="">--Select--</option>
                                        <option value="1">Napkin Tissue::1025</option>
                                        <option value="2">Garbage Poly::1031</option>
                                        <option value="3">Vim Soap::1023</option>
                                        <option value="4">Vim Botal::1024</option>
                                        <option value="5">Wheel powder::1022</option>
                                    </select>
                                </div>
                                <div class=" col-lg-3 p-0 pe-1 pb-1">
                                    <input type="text" readonly class="form-control" value="20.00" />
                                </div>
                                <div class="col-lg-5 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <input type="number" class="form-control" />
                                    <button class="btn btn-danger ms-2 removeBtn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-md-4">
            <button class="btn btn-danger w-100">Reset</button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success w-100">Save</button>
        </div>
    </div>
    <!-- end row -->
</div>