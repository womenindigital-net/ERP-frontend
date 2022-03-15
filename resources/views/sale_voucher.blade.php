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
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Sale Voucher @endslot
    @endcomponent

       <!-- journal form start -->
       <form class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Project</label>
                    <select class="form-control select2">
                        <option>--Select--</option>
                        
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        
                        
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Customer</label>
                    <select class="form-control select2">
                        <option>--Select--</option>
                        
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
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
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">Ship to addr</label>
                    <input type="text" class="form-control" id="validationCustom02"
                        placeholder="Enter ship to address here"  required>
                </div>
            </div>
            
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Warehouses</label>
                    <select class="form-control select2">
                        <option>--Select--</option>
                        
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        
                        
                    </select>
                </div>
            </div>
        </div>
        
        
        
    </form>
    <!-- journal form end -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">All product</h4>
                    <form class="repeater" enctype="multipart/form-data">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row">
                                <div  class=" col-lg-1 p-0 pe-1">
                                    <label for="name">SL</label> 
                                    <div ><span>1</span></div>
                                </div>

                                <div  class=" col-lg-1 p-0 pe-1">
                                    <label for="name">Catagory</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected=""></option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </select>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1">
                                    <label for="product">Product</label>
                                    <input type="text" class="form-control"/>
                                </div>
                                <div  class=" col-lg-2 p-0 pe-1">
                                    <label for="product">Avlilable Quality </label>
                                    <input type="text" class="form-control"/>
                                </div>

                                <div class=" col-lg-2 p-0 pe-1">
                                    <label for="quality">Quality</label>
                                    <input type="text"  class="form-control"/>
                                </div>

                                <div class=" col-lg-1 p-0 pe-1">
                                    <label for="discount">Price</label>
                                    <input type="number"  class="form-control"/>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1">
                                    <label for="subtotal">Discount</label>
                                    <input type="number" class="form-control"/>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1">
                                    <label for="total">Sub-total</label>
                                    <input type="text" class="form-control"/>
                                </div>
                                <div class="col-lg-1 p-0 pe-1 align-self-center">
                                      
                                    <div class="d-grid">
                                        <input data-repeater-delete type="button" class="btn btn-primary" value="Delete"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- another row start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <select class="form-control select2">
                    <option>--Select--</option>
                    
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    
                    
                </select>
            </div>
        </div>
    </div>
    <!-- another row start -->
    
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


    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    <!-- Responsive Table js -->
    <script src="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.js') }}"></script>

    <!-- Init js -->
    <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>


@endsection
