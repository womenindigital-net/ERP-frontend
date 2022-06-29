<div class="tab-pane active" id="finished_good" role="tabpanel">
    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <select class="form-control form-select">
                    <option>--Select--</option>
                    <option value="1">Canteen Logistic Materials</option>
                    <option value="2">Canteen Raw material</option>
                    <option value="3">Office Outlet</option>
                    <option value="4">Office Programme</option>
                    <option value="5">Office Store</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text name="hh" type="date"></x-input-text>
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
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="name">Category</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="product">Product</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="product">Unit</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="total">Quantity</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row removeRow">
                                <div class="col-lg-3 d-flex p-0 pe-1 pb-1 align-items-center">
                                    <select id="formrow-inputState" class="form-select">
                                        <option>Select</option>
                                        <option value="1">4 Water Purifier & 6 Fire Exit</option>
                                        <option value="2">AlAC (11)</option>
                                        <option value="3">Angel Chef Hot Kitchen</option>
                                        <option value="4">Anklet</option>
                                        <option value="5">Annual Anniversary</option>
                                        <option value="6">Annual Anniversary of PFDA - V</option>
                                        <option value="8">antivirus</option>
                                        <option value="9">Application Development</option>
                                        <option value="10">Art Finished Goods</option>
                                        <option value="11">Art Raw Materials</option>
                                        <option value="12">Art Training Materials </option>
                                        <option value="13">Asus Laptop </option>
                                        <option value="14">Attend meetings, Workshop, Sem </option>
                                        <option value="15">BAKERY </option>
                                        <option value="16">Bakery Equipment </option>
                                        <option value="17">Bakery finish products </option>
                                        <option value="18">Bakery Logistic Materials </option>
                                        <option value="19">Bakery Raw Materials </option>
                                    </select>
                                </div>
                                <div class=" col-lg-3 p-0 pe-1 pb-1">
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected="">Select</option>
                                    </select>
                                </div>
                                <div class=" col-lg-3 p-0 pe-1 pb-1">
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected="">Select</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text type="number" name="hh"></x-input-text>
                                    <button class="btn btn-danger ms-2 removeBtn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="ms-2">
                            <button data-repeater-create type="button"
                                class="btn btn-success waves-effect waves-light"> Add</button>
                        </div>
                    </form>
                    <!-- 7th row start  -->
                    <div class="row mt-3 justify-content-center ">
                        <div class="col-lg-6">
                            <div class="row mb-2">
                                <label for="horizontal-firstname-input"
                                    class="col-2 text-end col-form-label">Note</label>
                                <div class="col-10">
                                    <x-input-textarea name="hh" placeholder="Enter Note">
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
        <div class="col-md-4">
            <button class="btn btn-danger waves-effect waves-light w-100">Reset</button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success  waves-effect waves-light w-100"
                id="sa-position">Save</button>
        </div>
    </div>
    <!-- end row -->
</div>