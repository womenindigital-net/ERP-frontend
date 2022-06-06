@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')


<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#finished_good" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Product Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Product List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="finished_good" role="tabpanel">
                        <!-- form start -->
                        <div class="row">
                            <div class="col-6 d-flex">
                                <label for="example-text-input" class="col-md-3 col-form-label">Code</label>
                                <div class="col-md-8">
                                    <x-input-text name="Code" placeholder="Code"></x-input-text>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <x-input-text name="Name" placeholder="Name"></x-input-text>
                                </div>
                            </div>
                            <div class="col-6 d-flex pt-2 pb-2">
                                <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <x-input-textarea name="Description" rows=1 placeholder="Description">
                                    </x-input-textarea>
                                </div>
                            </div>
                            <div class="col-6 d-flex pt-2 pb-2">
                                <label for="example-text-input" class="col-md-3 col-form-label">Type</label>
                                <div class="col-md-8">
                                    <select class="form-control select2 form-select">
                                        <option>Select</option>
                                        <option value="0">Service</option>
                                        <option value="1">Inventory item</option>
                                        <option value="2">Non-inventory item</option>
                                        <option value="3">Other charges</option>
                                        <option value="4">Sub total</option>
                                        <option value="5">Group</option>
                                        <option value="6">Discount</option>
                                        <option value="7">Fixed asset</option>
                                        <option value="8">Inhouse production</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 d-flex  pb-2">
                                <label for="example-text-input" class="col-md-3 col-form-label">Category</label>
                                <div class="col-md-8">
                                    <select class="form-control select2 form-select">
                                        <option value="0">Select</option>
                                        <option value="1">4 Water Purifier &amp; 6 Fire Exti</option>
                                        <option value="2">AC (11)</option>
                                        <option value="3">Angel Chef Hot Kitchen</option>
                                        <option value="4">Anklet</option>
                                        <option value="6">Application Development</option>
                                        <option value="7">Art Raw Materials</option>
                                        <option value="8">Asus Laptop</option>
                                        <option value="9">BAKERY</option>
                                        <option value="10">Bakery Equipment</option>
                                        <option value="11">Bakery Logistic Materials</option>
                                        <option value="12">Bakery vegetable</option>
                                        <option value="141">Banner and Brochure</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 d-flex  pb-2">
                                <label for="example-text-input" class="col-md-3 col-form-label">Measurement</label>
                                <div class="col-md-8">
                                    <select class="form-control select2 form-select">
                                        <option>Select</option>
                                        <option value="1">bottol</option>
                                        <option value="2">Bundle</option>
                                        <option value="3">Can</option>
                                        <option value="4">CAT Veg Portion</option>
                                        <option value="5">DAY</option>
                                        <option value="6">DOZEN</option>
                                        <option value="7">FUEL</option>
                                        <option value="8">GOJ</option>
                                        <option value="9">Gram</option>
                                        <option value="10">Kilogram</option>
                                        <option value="11">LINE</option>
                                        <option value="12">Litter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 d-flex pb-4">
                                <label for="example-text-input" class="col-md-3 col-form-label">Reorder Quantity</label>
                                <div class="col-md-8">
                                    <x-input-text type="number" name="Reorder Quantity" placeholder="Reorder Quantity">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <label for="example-text-input" class="col-md-3 col-form-label">Image</label>
                                <div class="col-md-8">
                                    <x-input-text type="file" name="Name" placeholder="Name"></x-input-text>
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
                            <div class="col-4 pb-4 hide_sell">
                                <label for="example-text-input" class="col-form-label">Sell Price</label>
                                <x-input-text type="number" name="Sell Price" placeholder="Sell Price">
                                </x-input-text>
                            </div>
                            <div class="col-4 hide_cost">
                                <label for="example-text-input" class=" col-form-label">Cost Price</label>
                                <x-input-text name="Cost Price" type="number" placeholder="Cost Price Here">
                                </x-input-text>
                            </div>
                            <div class="col-4 hide_expiry">
                                <label for="example-text-input" class=" col-form-label ">Expiry Alert</label>
                                <x-input-text type="number" name="Expiry Alert" placeholder="Expiry Alert">
                                </x-input-text>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Product BOM</h4>
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="name">SL</label>
                                    <label for="name">P. Category</label>
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
                                <div data-repeater-item class="row">
                                    <div class=" col-lg-2 d-flex p-0 pe-1 pb-1">
                                        <span class="pe-2 pb-1">01</span>
                                        <div>
                                            <select id="formrow-inputState" class="form-select">
                                                <option value="1">Select</option>
                                                <option value="1">4 Water Purifier &amp; 6 Fire Exti</option>
                                                <option value="2">AC (11)</option>
                                                <option value="3">Angel Chef Hot Kitchen</option>
                                                <option value="4">Anklet</option>
                                                <option value="5">Annual Anniversary</option>
                                                <option value="6">Annual Anniversary of PFDA - V</option>
                                                <option value="7">antivirus</option>
                                                <option value="8">Application Development</option>
                                                <option value="9">Art Finished Goods</option>
                                                <option value="10">Art Raw Materials</option>
                                                <option value="11">Art Training Materials</option>
                                                <option value="12">Asus Laptop</option>
                                            </select>
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
                                        <x-input-text name="Cost" type="number" placeholder="Cost">
                                        </x-input-text>
                                        <div>
                                            <button class="btn btn-danger ms-2">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0"
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
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light"
                                data-bs-dismiss="modal"> Reset</button>
                            <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal"
                                data-bs-target=".social-communication-view"> Save</button>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane" id="finished_good_list" role="tabpanel">
                        <div class="row">
                            <div class="row">
                                <div class="col-3 d-flex p-2 pb-2">
                                </div>
                                <div class="col-6 d-flex p-2 pb-2">
                                    <div class="row p-2">
                                        <div class="col-6 d-flex align-items-center">
                                            <label class="pe-2">Type</label>
                                            <select class=" form-select">
                                                <option>Select</option>
                                                <option value="0">Service</option>
                                                <option value="1">Inventory item</option>
                                                <option value="2">Non-inventory item</option>
                                            </select>
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            <label class="pe-2">Category</label>
                                            <select class=" form-select">
                                                <option value="0">Select</option>
                                                <option value="1">4 Water Purifier &amp; 6 Fire Exti</option>
                                                <option value="2">AC (11)</option>
                                                <option value="3">Angel Chef Hot Kitchen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-flex p-2 pb-2">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                        class="form-control form-control-sm form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-6 text-end">
                                <label style="display: inline-flex;align-items: center;">Search:
                                    <input type="search" class="form-control form-control-sm" placeholder="">
                                </label>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table w-100 table-bordered">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th>Measurement</th>
                                        <th>Sell Price</th>
                                        <th>Cost Price</th>
                                        <th>Log</th>
                                        <th class="nowrap">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jw0112</td>
                                        <td>Anklet</td>
                                        <td>Inhouse production</td>
                                        <td>Anklet</td>
                                        <td>Piece</td>
                                        <td>100.00</td>
                                        <td>80.00</td>
                                        <td>Create: Ohidul Hassan @ 2021-08-08 17:27:33
                                            There is no update record.</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target=".material-callects-modal-xl-view">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                Showing 1 to 2 of 2 entries
                            </div>
                            <div class="col-sm-12 col-md-6 text-end">
                                <nav>
                                    <ul class="pagination" style="justify-content: end;">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')

<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
<script>
    $(document).ready(function(){
            $(".hide_sell").hide();
          $("#sell").click(function(){
            $(".hide_sell").toggle();
          });
            $(".hide_cost").hide();
          $("#cost").click(function(){
            $(".hide_cost").toggle();
          });
            $(".hide_expiry").hide();
          $("#expiry").click(function(){
            $(".hide_expiry").toggle();
          });

        });
</script>
@endsection
@section('script-bottom')
@endsection