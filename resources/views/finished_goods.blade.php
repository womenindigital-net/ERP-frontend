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

    <!-- Sweet Alert-->
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
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
                            <a class="nav-link active" data-bs-toggle="tab" href="#finished_good" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Finished Goods</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Finished Goods List</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="finished_good" role="tabpanel">
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
                                            <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" value="" placeholder="dd M, yyyy"
                                            data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div>
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
                                                        <label for="name">SL</label>
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
                                                    <div data-repeater-item class="row">

                                                        <div  class="col-lg-3 d-flex p-0 pe-1 pb-1 align-items-center">
                                                            <span class="pe-2 pb-1">01</span>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">Select</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-3 p-0 pe-1 pb-1">
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">Select</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
                                                        <div  class=" col-lg-3 p-0 pe-1 pb-1">
                                                            <input type="text" class="form-control"/>
                                                        </div>
                                                        <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <input type="text" class="form-control"/>
                                                            <button class="btn btn-danger btn-rounded ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                               <div class="ms-2">
                                                <button data-repeater-create type="button" class="btn btn-success font-size-16 waves-effect waves-light"><i class="bx bx-plus-circle bx-spin align-middle me-1 mb-1"></i> Add</button>
                                               </div>
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
                            
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <button class="btn btn-danger font-size-16 btn-rounded waves-effect waves-light w-100"> <i class="bx bx-reset align-middle me-1 mb-1"></i>Reset</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success font-size-16 btn-rounded waves-effect waves-light w-100" id="sa-position"><i class="bx bx-save align-middle me-1 mb-1"></i>Save</button>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane" id="finished_good_list" role="tabpanel">
                            <div class="row">
                                <div class="col p-0 table-responsive border-0">
                                    <table id="datatable-buttons" class="table table-bordered table-responsive w-100">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>SL</th>
                                                <th>Warehouse</th>
                                                <th>Added Date</th>
                                                <th>Added By</th>
                                                <th>Log</th>
                                                <th class="nowrap">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1235</td>
                                                <td>puja</td>
                                                <td>Hridoy</td>
                                                <td>01</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                    class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target=".finished-goods-modal-xl-view"> <i
                                                        class="fas fa-eye"></i></button>
                                                    <a  href="finished_goods" class="btn btn-sm btn-success btn-rounded waves-effect waves-light">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <button type="button"
                                                        class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light" id="sa-warning"> <i
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



    <!--  Extra Large modal example -->
    <div class="modal fade finished-goods-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Finished Goods <i class=" fas fa-eye bx-tada"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Warehouse</label>
                                    <p class="form-control">Warehouse</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <p class="form-control">24-4-2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h2 class=" text-center mb-4">All Products</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 p-0">
                                <div class="card">
                                    <div class="card-body py-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr class="table-primary text-center">
                                                        <th>SL</th>
                                                        <th>Category</th>
                                                        <th>Product</th>
                                                        <th>Unit</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <p class="p-0"><Strong>Note: </Strong> Note Note Note Note Note Note Note Note </p>
                            </div>
                        </div>
                    <!-- journal form end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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

    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>
@endsection
@section('script-bottom')
@endsection