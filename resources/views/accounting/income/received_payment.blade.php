@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Received Payment @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#receive_payment" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Donation And Other Payment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#received_payment_details" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Donation And Other Details</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="receive_payment" role="tabpanel">
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


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Payment Date</label>
                                    <x-input-text type="date" name="name" placeholder="dd M, yyyy">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Note</label>
                                    <x-input-textarea name="name" rows="1" placeholder="">
                                    </x-input-textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Cash Pay</label>
                                    <x-input-text name="name" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                        </div>
                        <!-- 8th row start  -->
                        <div class="row my-3">
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
                                                <x-input-text name="name" placeholder="Enter Bank Name Here">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Cheque No</label>
                                                <x-input-text name="name" placeholder="Phone One Here">
                                                </x-input-text>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"> Acc No</label>
                                                <x-input-text name="name" placeholder="Enter  Phone Two Here">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Account Name</label>
                                                <x-input-text name="name" placeholder="Enter Acc.Name Here">
                                                </x-input-text>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Bank Name</label>
                                                <x-input-text name="name" placeholder="Enter Bank Name Here">
                                                </x-input-text>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th row end  -->
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- 6th row start  -->
                                        <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-4 text-end col-form-label"> Item</label>
                                                    <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-4 text-end col-form-label"> Total Amount </label>
                                                    <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 6th row end  -->
                                        <h4 class="card-title mb-4">All product</h4>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <label for="name">SL</label>
                                                </div>
                                                <div class="col p-0 pe-1">
                                                    <label for="product">Invoice Number</label>
                                                </div>
                                               
                                                <div class="col p-0 pe-1">
                                                    <label for="quality">Payment Amount</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row removeRow">

                                                    <div class=" col-lg-1 p-0 pe-1 pb-1 mt-2">
                                                        <span class="pe-2 pb-1">01</span>
                                                    </div>
                                                    <div class=" col p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">--Select invoice--</option>
                                                            <option value="1">SDT-1212</option>
                                                            <option value="2">SDT-3434</option>
                                                            <option value="3">SDT-4333</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col p-0 pe-1 pb-1">
                                                        <x-input-text name="name"  placeholder="">
                                                        </x-input-text>
                                                    </div>
                                                    <div class=" col-1 p-0 pe-1 pb-1">
                                                        <div> 
                                                            <button class="btn btn-danger ms-2 removeBtn">
                                                            <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                        </form>
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
                    <div class="tab-pane" id="received_payment_details" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <label style="display: inline-flex;align-items: center;"> Show <select
                                                    name="length"
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
                                                <input type="search" class="form-control form-control-sm"
                                                    placeholder="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered w-100">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>Customer</th>
                                                    <th>Project</th>
                                                    <th>Date</th>
                                                    <th>Cash Payment</th>
                                                    <th>Cheque Payment</th>
                                                    <th>Total Payment</th>
                                                    <th>Reference</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                            <i class="bx bx-dollar"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                            <i class="fas fa-arrow-circle-right"></i>
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                            <i class="fas fa-trash-alt"></i>
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
                                                        <a class="page-link" href="#">2 <span
                                                                class="sr-only">(current)</span></a>
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

@endsection
@section('script-bottom')
@endsection