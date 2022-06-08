@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Sale Voucher @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#sale_voucher" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Sale Voucher</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#sale_voucher_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Sale Voucher List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="sale_voucher" role="tabpanel">
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
                                    <label class="form-label">Customer</label>
                                    <select class="form-control select2">
                                        <option>--Select--</option>
                                        <option value="1">Airin Siddique</option>
                                        <option value="2">Apex (Order by)</option>
                                        <option value="3">Begum Nurjahan</option>
                                        <option value="4">Blues</option>
                                        <option value="5">EcoTex</option>
                                        <option value="6">FSIB Ltd</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Customer Phone</label>
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Date</label>
                                    <x-input-text type="date" name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Ship to addr</label>
                                    <x-input-text name="name" placeholder="Enter ship to address here">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Warehouses</label>
                                    <select class="form-control select2">
                                        <option value="">--Select--</option>
                                        <option value="35">Canteen Logistic Materials</option>
                                        <option value="25">Canteen Raw material</option>
                                        <option value="21">Office Outlet</option>
                                        <option value="22">Office Programme</option>
                                        <option value="26">Office Store</option>
                                    </select>
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
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="name">Catagory</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="product">Product</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="product">Avlilable Qty </label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="quality">Qty</label>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <label for="discount">Price</label>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <label for="subtotal">Discount</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="total">Sub-total</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row removeRow">

                                                    <div class=" col-lg-2 d-flex p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">--Select--</option>
                                                            <option value="1">Cake</option>
                                                            <option value="2">Cookies</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">--Select--</option>
                                                            <option value="1">Product 1</option>
                                                            <option value="1">Product 2</option>
                                                            <option value="1">Product 3</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <x-input-text name="name" placeholder="">
                                                        </x-input-text>
                                                    </div>

                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <x-input-text name="name" placeholder="">
                                                        </x-input-text>
                                                    </div>
                                                    <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                        <x-input-text name="name" placeholder="">
                                                        </x-input-text>
                                                    </div>
                                                    <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                        <x-input-text name="name" placeholder="">
                                                        </x-input-text>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                                        <x-input-text name="name" placeholder="">
                                                        </x-input-text>
                                                        <button class="btn btn-danger ms-2 removeBtn">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                        </form>
                                        <!-- 5th row start -->
                                        <div class="row justify-content-center pt-3">

                                            <div class="col-lg-6">
                                                <div class="row mb-4">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input"
                                                            class="col-4 text-end col-form-label text-end">Reference</label>
                                                        <div class="col-8">
                                                            <x-input-text name="name"
                                                                placeholder="Enter reference if any">
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
                                                        class="col-4 text-end col-form-label"> Discount</label>
                                                    <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-4 text-end col-form-label"> Item</label>
                                                    <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-4 text-end col-form-label"> Cost</label>
                                                    <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-4 text-end col-form-label"> Paid</label>
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
                                                    <label for="horizontal-firstname-input"
                                                        class="col-3 text-end col-form-label">Cash Pay</label>
                                                    <div class="col-9">
                                                        <x-input-text name="name" placeholder="Enter Cash Amount">
                                                        </x-input-text>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- 7th row end  -->
                                        <!-- 8th row start  -->
                                        <div class="row">
                                            <div class="form-check form-check-primary mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheckBox">
                                                <label class="form-check-label" for="formCheckcolor1">Cheque Pay</label>
                                            </div>
                                            <div class="row" id="formCheckBoxForm">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Amount</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter Bank Name Here">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Cheque No</label>
                                                                <x-input-text name="name" placeholder="Phone One Here ">
                                                                </x-input-text>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Acc No</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter  Phone Two Here ">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Account Name</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter Acc.Name Here ">
                                                                </x-input-text>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Bank Name</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter Bank Name Here ">
                                                                </x-input-text>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 8th row end  -->
                                        <!-- 9th row start  -->
                                        <div class="row">
                                            <div class="form-check form-check-primary mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheckBox2">
                                                <label class="form-check-label" for="formCheckcolor1"> Credit Card
                                                    Pay</label>
                                            </div>
                                            <div class="row" id="formCheckBoxForm2">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Amount</label>
                                                                <x-input-text name="name" placeholder="Enter  Amount">
                                                                </x-input-text>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label"> Card No</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter  Credit Card Number">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Name</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter  Card Name">
                                                                </x-input-text>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Type</label>
                                                                <x-input-text name="name"
                                                                    placeholder="Enter  Card Type here">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- 9th row end  -->
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
                    </div>
                    <div class="tab-pane" id="sale_voucher_list" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table id="datatable-buttons"
                                            class="table table-striped table-bordered dt-responsive w-100">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>Project</th>
                                                    <th>Customer</th>
                                                    <th>Is Draft</th>
                                                    <th>Date</th>
                                                    <th>Cost</th>
                                                    <th>Discount</th>
                                                    <th>Is Pay Completed</th>
                                                    <th>Cash Amount</th>
                                                    <th>Cheque Amount</th>
                                                    <th>Credit Amount</th>
                                                    <th>Total Paid</th>
                                                    <th>Log</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
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

{{-- Custom Js form --}}
<script>
    $(document).ready(function(){
            $("#formCheckBoxForm").hide();
            $("#formCheckBoxForm2").hide();

            $("#formCheckBox").click(function(){
                $("#formCheckBoxForm").toggle();
            });
            $("#formCheckBox2").click(function(){
                $("#formCheckBoxForm2").toggle();
            });
        });
</script>
@endsection