@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') STOCK RECEIVE @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5 pb-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#stock_recive" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Stock Receive</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#stock_recive_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Stock Receive List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="stock_recive" role="tabpanel">
                        <!-- form start -->
                        <form class="needs-validation" novalidate>
                            <div class="row pb-5">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <select class="form-control form-select">
                                            <option>--Select--</option>
                                            <option value="1">Administration</option>
                                            <option value="2">Angel Chef Bekery</option>
                                            <option value="3">Art, Crafts and Paintings</option>
                                            <option value="4">Boutique Section (Tie-Dye and Block)</option>
                                            <option value="5">Computer Section</option>
                                            <option value="7">Cricket</option>
                                            <option value="8">Dance</option>
                                            <option value="9">Drama </option>
                                            <option value="10">Employment </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Reveive Type</label>
                                        <select class="form-control form-select">
                                            <option>--Select--</option>
                                            <option value="1">purchase</option>
                                            <option value="2">Return</option>
                                            <option value="3">Temporary</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Purchase</label>
                                        <x-input-text name="name" placeholder="Purchase no here"></x-input-text>
                                        <label for="validationCustom02" class="form-label">Return</label>
                                        <x-input-text name="name" placeholder="Return here"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <x-input-text name="name" type="date"></x-input-text>
                                    </div>
                                </div>
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
                            </div>
                        </form>
                        <!--form end -->
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="card">
                                    <h4 class="card-title mb-4">Product BOM</h4>
                                    <form class="repeater pb-2" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class=" col-lg-2 p-0">
                                                <label for="name">SL</label>
                                                <label for="product">Product</label>
                                            </div>
                                            <div class="col-lg-2 p-0">
                                                <label for="subject">Exp. Date</label>
                                            </div>
                                            <div class=" col-lg-1 p-0">
                                                <label>Quantity</label>
                                            </div>
                                            <div class=" col-lg-1 p-0">
                                                <label>Received</label>
                                            </div>
                                            <div class=" col-lg-1 p-0">
                                                <label>Return</label>
                                            </div>
                                            <div class=" col-lg-1 p-0">
                                                <label>Reveiveble</label>
                                            </div>
                                            <div class="col-lg-2 p-0">
                                                <label>Stock Receive Qn.</label>
                                            </div>
                                            <div class="col-lg-1 p-0">
                                                <label>Serial</label>
                                            </div>
                                        </div>
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">

                                                <div class="col-lg-2  d-flex p-0 pe-1 pb-2 align-items-center ">
                                                    <strong class="pe-2 pb-1">01</strong>
                                                    <select class="form-control form-select">
                                                        <option>--Select--</option>
                                                        <option value="1">Canteen Logistic Materials</option>
                                                        <option value="2">Canteen Raw material</option>
                                                        <option value="3">Office Outlet</option>
                                                        <option value="4">Office Programme</option>
                                                        <option value="5">Office Store</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-2 p-0 pe-1">
                                                    <x-input-text name="name" type="date"></x-input-text>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <x-input-text type="number" name="name" placeholder="0"></x-input-text>
                                                </div>

                                                <div class="col-lg-1 p-0 pe-1">
                                                    <x-input-text name="name" placeholder="0"></x-input-text>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <x-input-text name="name" placeholder="0"></x-input-text>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <x-input-text name="name" placeholder="0"></x-input-text>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <x-input-text name="name"></x-input-text>
                                                </div>
                                                <div class="col-lg-1 p-0 pe-1">
                                                    <x-input-text type="number" name="name"></x-input-text>
                                                </div>
                                                <div class="mb-2 col-lg-1 p-0 pe-1">
                                                    <button type="button"
                                                        class="btn btn-danger waves-effect waves-light ">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                            value="Add" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="stock_recive_list" role="tabpanel">
                        <div class="row">
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
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th class="">Project</th>
                                        <th class="">Type</th>
                                        <th class="">Date</th>
                                        <th class="">Quantity</th>
                                        <th class="">Warehouse</th>
                                        <th class="">Receiver</th>
                                        <th>Log</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Puja</td>
                                        <td>puja</td>
                                        <td>reading</td>
                                        <td>first to last</td>
                                        <td>puja</td>
                                        <td>puja</td>
                                        <td>puja</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                                <i class=" fas fa-eye"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                                <i class="fas fa-pen"></i></button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                <i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Puja</td>
                                        <td>puja</td>
                                        <td>reading</td>
                                        <td>first to last</td>
                                        <td>puja</td>
                                        <td>puja</td>
                                        <td>puja</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                                <i class=" fas fa-eye"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                                <i class="fas fa-pen"></i></button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                <i class="fas fa-trash-alt"></i></button>
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
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <button class="btn btn-danger  waves-effect waves-light w-100">Reset</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-success  waves-effect waves-light w-100"
                            id="sa-position">Save</button>
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