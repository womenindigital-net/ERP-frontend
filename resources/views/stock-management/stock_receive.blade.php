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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Project</label>
                                                <select class="form-control select2">
                                                    <option>--Select--</option>
                                                    <option value="1">Administration</option>
                                                    <option value="2">Angel Chef Bekery</option>
                                                    <option value="3">Art, Crafts  and Paintings</option>
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
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <option value="1">purchase</option>
                                                    <option value="2">Return</option>
                                                    <option value="3">Temporary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Reference</label>
                                                <input type="text" class="form-control" placeholder="Reference no here" id="validationCustom02"
                                                required> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Date</label>
                                                    <div class="input-group" id="datepicker1">
                                                    <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                     data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">
        
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  justify-content-end">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Location</label>
                                                <select class="form-control select2">
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
                                                        <div  class=" col-lg-2 p-0">
                                                            <label for="name">SL</label>
                                                            <label for="product">Product</label>
                                                        </div>
                                                        <div  class="col-lg-2 p-0">
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
                
                                                            <div  class="col-lg-2  d-flex p-0 pe-1 pb-2 align-items-center ">
                                                                <strong class="pe-2 pb-1">01</strong>
                                                                <input type="text" id="text" class="form-control" />
                                                               
                                                            </div>
                
                                                            <div  class="col-lg-2 p-0 pe-1">
                                                                <div class="input-group" id="datepicker1">
                                                                    <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                     data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                
                                                            <div class="col-lg-1 p-0 pe-1">
                                                                <input type="text" class="form-control" id="resume" placeholder="0">
                                                            </div>
                
                                                            <div class="col-lg-1 p-0 pe-1">
                                                                <input type="text" class="form-control" id="resume" placeholder="0">
                                                            </div>
                                                            <div class="col-lg-1 p-0 pe-1">
                                                                <input type="text" class="form-control" id="resume" placeholder="0">
                                                            </div>
                                                            <div class="col-lg-1 p-0 pe-1">
                                                                <input type="text" class="form-control" id="resume" placeholder="0">
                                                            </div>
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <input type="text" class="form-control" id="resume">
                                                            </div>
                                                            <div class="col-lg-1 p-0 pe-1">
                                                                <input type="text" class="form-control col" id="resume">
                                                            </div>
                                                            
                                                            <div class="mb-2 col-lg-1 p-0 pe-1">
                                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light ">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane" id="stock_recive_list" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable-buttons" class="table table-bordered dt-responsive  w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Project</th>
                                                        <th>Type</th>
                                                        <th>Date</th>
                                                        <th>Total Item Quantity</th>
                                                        <th>Location</th>
                                                        <th>Receiver</th>
                                                        <th>Log</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Administration</td>
                                                        <td>purchase</td>
                                                        <td>2022-04-19</td>
                                                        <td>1</td>
                                                        <td>Canteen Raw material</td>
                                                        <td>A.K.M Shahidullah</td>
                                                        <td>Create: A.K.M Shahidullah @ 2022-04-19 15:12:04
                                                            There is no update record.</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Administration</td>
                                                        <td>purchase</td>
                                                        <td>2022-02-15</td>
                                                        <td>1</td>
                                                        <td>Canteen Raw material</td>
                                                        <td>Md. Kutubuddin ..</td>
                                                        <td>Create: Md. Kutubuddin .. @ 2022-02-15 19:14:59
                                                            There is no update record.</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row --> 
                            <!-- end row -->
                        
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

    {{-- Custom Js  form --}}
    <script>
        $(document).ready(function(){
            $("#formCheckBoxForm").hide();
    
            $("#formCheckBox").click(function(){
                $("#formCheckBoxForm").toggle();
            });
        });
        </script>
@endsection