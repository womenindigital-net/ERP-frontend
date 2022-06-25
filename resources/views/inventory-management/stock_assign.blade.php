@extends('layouts.master')
@section('content')
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
                            <form method="post" action="{{route('stock-assign.store')}}">
                            @csrf
                            <!-- form start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Warehouse</label>
                                            <x-input-select name="warehouse_id" :records="$warehouses"
                                                            targetColumn="title"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Date</label>
                                            <x-input-text name="date" type="date" placeholder="dd M, yyyy"/>
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
                                                                <x-input-select name="product_id" :records="$products"/>
                                                            </div>
                                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                <x-input-text name="qty" type="number" placeholder=""/>
                                                            </div>
                                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                <x-input-text name="depreciation_percentage" placeholder=""/>
                                                            </div>
                                                            <div
                                                                class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                <x-input-select name="warehouse_id"
                                                                                :records="$warehouses"
                                                                                targetColumn="title"/>
                                                                <button class="btn btn-danger ms-2 removeBtn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <input data-repeater-create type="button"
                                                           class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                </div>
                                                <!-- 7th row start  -->
                                                <div class="row mt-3 justify-content-center ">
                                                    <div class="col-lg-6">
                                                        <div class="row mb-2">
                                                            <div class="col-10">
                                                                <label class="text-end form-label">Note</label>
                                                                <x-input-textarea name="note" cols="5"
                                                                                  placeholder="Enter Note ..."/>
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
                                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light">
                                                    <i
                                                        class="fas fa-check"></i></button>
                                                <button type="button"
                                                        class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-x"><i
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
