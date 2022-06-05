@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
   
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Purchase Return @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#purchase_return" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Purchase Return</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#purchase_return_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Purchase Return List</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="purchase_return" role="tabpanel">
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
                                        <label class="form-label">Purchase</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="1">R-1-1</option>
                                            <option value="2">R-1-2</option>
                                            <option value="3">R-1-3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Return Date</label>
                                        <x-input-text name="yousuf" type="date"></x-input-text>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Order Purchase</label>
                                            <select class="form-control select2">
                                                <option>--Select--</option>
                                                <option value="1">R-1-1</option>
                                                <option value="2">R-1-2</option>
                                                <option value="3">R-1-3</option>
                                            </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- 6th row start  -->
                                            <div>
                                                <h3 class="text-success">Total</h3>
                                            </div>
                                            <div class="row bg-secondary text-light rounded-3 mb-4">
                                                <div class="col-md-4 py-2">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Discount</label>
                                                        <div class="col-7">
                                                        <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 py-2">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Item</label>
                                                        <div class="col-7">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 py-2">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Cost</label>
                                                        <div class="col-7">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 py-2">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> VAT</label>
                                                        <div class="col-7">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 py-2">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Total Deduction</label>
                                                        <div class="col-7">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 py-2">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Total Amount</label>
                                                        <div class="col-7">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 6th row end  -->
                                            <h4 class="card-title mb-4">All product</h4>
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="name">SL</label>
                                                        <label for="name">Product</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Exp. Date</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="quality">Qnty</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="discount">Price</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="subtotal">VAT</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="subtotal">Discount</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="subtotal">Deduct</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="subtotal">Subtotal</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">

                                                        <div  class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                                            <span class="pe-2 pb-1">01</span>
                                                            <select id="formrow-inputState" class="form-select py-0">
                                                                <option selected="">--Select--</option>
                                                                <option value="1">Koi Fish::191</option>
                                                                <option value="2">Talapia Fish::193</option>
                                                                <option value="3">Fish - Pangash Fish::1641</option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="date"></x-input-text>
                                                        </div>

                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" placeholder="190"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" placeholder="00"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" placeholder="00"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" placeholder="190" type="number"></x-input-text>
                                                        </div>
                                                        <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <x-input-text name="yousuf" placeholder="190"></x-input-text>
                                                            <button class="btn btn-danger ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                            </form>
                                            <!-- 7th row start  -->
                                            <div class="row mt-3 justify-content-center ">
                                                <div class="col-lg-6">
                                                    <div class="row mb-2">
                                                        <label for="horizontal-firstname-input" class="col-2 text-end col-form-label">Note</label>
                                                        <div class="col-10">
                                                            <x-input-textarea name="yousuf" rows="1"></x-input-textarea>
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
                        <div class="tab-pane" id="purchase_return_list" role="tabpanel">
                             <!-- end row -->
                             <div class="table-responsive">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>SL</th>
                                            <th>Job No</th>
                                            <th>Project</th>
                                            <th>Supplier</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Cost</th>
                                            <th>VAT</th>
                                            <th>Discount</th>
                                            <th>Send for approve</th>
                                            <th>Is Approved</th>
                                            <th>Paid Amount</th>
                                            <th>Is Paid</th>
                                            <th>Log</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Puja</td>
                                            <td>yousuf</td>
                                            <td>reading</td>
                                            <td>first to last</td>
                                            <td>Puja</td>
                                            <td>yousuf</td>
                                            <td>reading</td>
                                            <td>first to last</td>
                                            <td>Puja</td>
                                            <td>yousuf</td>
                                            <td>yousuf</td>
                                            <td>yousuf</td>
                                            <td>reading</td>
                                            <td>first to last</td>
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
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
@endsection
@section('script-bottom')
@endsection