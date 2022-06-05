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
                        <a class="nav-link active" data-bs-toggle="tab" href="#product_details" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add Product Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#product_details_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Product Details List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="product_details" role="tabpanel">
                        <!-- form start -->
                        <div class="row">
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
                                                <div class="col-lg-3 p-0 pe-1">
                                                    <label for="name">SL</label>
                                                    <label for="name">Category</label>
                                                </div>
                                                <div class="col-lg-3 p-0 pe-1">
                                                    <label for="product">Product</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="product">Product Quentity</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="quality">Depreciation Percent</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="total">Assigned To</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">

                                                    <div class="col-lg-3 d-flex p-0 pe-1 pb-1">
                                                        <span class="pe-2 pb-1">01</span>
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option value="">--Select--</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                            <option value="1">Canteen Raw Material</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-3 p-0 pe-1 pb-1">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected="">--Select--</option>
                                                            <option value="1">Garbage Poly::1031</option>
                                                            <option value="1">Hand Wash::1027</option>
                                                            <option value="3">Napkin Tissue::1025</option>
                                                            <option value="4">Savlon::1028</option>
                                                            <option value="5">Vim Botal::1024</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <x-input-text name="name" type="number" placeholder="">
                                                        </x-input-text>
                                                    </div>

                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <x-input-text name="name" placeholder=""></x-input-text>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option value="">--Select--</option>
                                                            <option value="1">Abul hasnat</option>
                                                            <option value="2">Achia Nila</option>
                                                            <option value="3">Airin Shiddique</option>
                                                            <option value="4">Amal Rozareo</option>
                                                            <option value="5">Anas Bin Iqbal</option>
                                                        </select>
                                                        <button class="btn btn-danger ms-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                        </form>
                                        <!-- 7th row start  -->
                                        <div class="row mt-3 justify-content-center ">
                                            <div class="col-lg-6">
                                                <div class="row mb-2">
                                                    <div class="col-10">
                                                        <label class="text-end form-label">Note</label>
                                                        <x-input-textarea name="name" cols="5"
                                                            placeholder="Enter Note ...">
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
                    <div class="tab-pane" id="product_details_list" role="tabpanel">
                        <div class="row">
                            <div class="p-0 table-responsive border-0">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Warehouse</th>
                                            <th>Product Name</th>
                                            <th>Counted By</th>
                                            <th>Note</th>
                                            <th>Is Approved</th>
                                            <th>Log</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Lorem, ipsum dolor.</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                            <td>Lorem, ipsum dolor.</td>
                                            <td><small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam,
                                                    laudantium!</small></td>
                                            <td>YES</td>
                                            <td><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Molestiae, quod!</small></td>
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