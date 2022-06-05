@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') STOCK ASSIGN @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#stock_out" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Stock Out</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#stock_out_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Product Details List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
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
                                                    <label for="name">SL</label>
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
                                                <div data-repeater-item class="row">

                                                    <div class="col-lg-4 d-flex p-0 pe-1 pb-1">
                                                        <span class="pe-2 pb-1">01</span>
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
                                                        <input type="text" readonly class="form-control"
                                                            value="20.00" />
                                                    </div>
                                                    <div class="col-lg-5 p-0 pe-1 pb-1 align-self-center d-flex">
                                                        <input type="number" class="form-control" />
                                                        <button class="btn btn-danger ms-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
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
                    <div class="tab-pane" id="stock_out_list" role="tabpanel">
                        <div class="text-center mb-4">
                            <button class="btn btn-success">Send All For Approval <i class="fas fa-check"></i></button>
                        </div>
                        <div class="row">
                            <div class="p-0 table-responsive border-0">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Project</th>
                                            <th>Location</th>
                                            <th>Date</th>
                                            <th>Total Item Quantity</th>
                                            <th>Log</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lorem, ipsum dolor.</td>
                                            <td>Lorem, ipsum.</td>
                                            <td>23/23/23</td>
                                            <td>20</td>
                                            <td><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Consequuntur, vitae.</small></td>
                                            <td class="text-center">
                                                <button type="button"
                                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light"> <i
                                                        class="fas fa-check"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"> <i
                                                        class="fas fa-eye"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".journal-modal-xl-edit">
                                                    <i class="fas fa-pen"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
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