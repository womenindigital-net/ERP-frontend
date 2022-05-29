@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
    
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

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
                                        <div class="input-group" id="datepicker1">
                                        <input type="text" class="form-control" value="" placeholder="dd M, yyyy"
                                        data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Reference</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="Enter Reference here">
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
                                                            <P class="form-control m-0">08/02/2022</P>
                                                        </div>

                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <input type="number"  class="form-control"/>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <p class="form-control m-0">190</p>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <p class="form-control m-0">00</p>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <p class="form-control m-0">00</p>
                                                        </div>
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <input type="number"  class="form-control"/>
                                                        </div>
                                                        <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <p class="form-control m-0">190</p>
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
                                                        <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Note ">
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
                            <div class="row">
                                <div class="col p-0 table-responsive border-0">
                                    <table id="datatable-buttons" class="table table-bordered table-responsive w-100">
                                        <thead>
                                            <tr>
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
                                                <td>1</td>
                                                <td>1235</td>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>01</td>
                                                <td>12/03</td>
                                                <td>coffee</td>
                                                <td>1205</td>
                                                <td>459909</td>
                                                <td>ok</td>
                                                <td>yes</td>
                                                <td>12</td>
                                                <td>231</td>
                                                <td>231</td>
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
                                                        class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"> <i
                                                            class="fas fa-trash-alt"></i></button>
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
    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>

    {{-- Table --}}

    <!-- Responsive Table js -->
    <script src="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.js') }}"></script>

    <!-- Init js -->
    <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
@endsection
@section('script-bottom')
@endsection