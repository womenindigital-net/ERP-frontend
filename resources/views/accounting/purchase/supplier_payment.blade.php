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
        @slot('title') Supplier Payment @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#supplier_payment" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Supplier Payment</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#supplier_payment_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Supplier Payment List</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="supplier_payment" role="tabpanel">
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
                                        <label class="form-label">Supplier</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="1">Advance Payment</option>
                                            <option value="2">ASAP Healthy Food Ltd</option>
                                            <option value="3">Ayman Enterprise</option>
                                            <option value="4">Bahar General store</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
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
                                        <input type="text" class="form-control" placeholder="Enter Reference here" disabled value="RP-76">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
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
                                                                    <input type="number" class="form-control" placeholder="Enter Amount Here">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">AccNo</label>
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
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Cheque Book</label>
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
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Cheque No.</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Cheque No. Here">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 6th row start  -->
                                            <div>
                                                <h3 class="text-success">Total</h3>
                                            </div>
                                            <div class="row py-3 bg-secondary text-light rounded-3 mb-4"> 
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">Item</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">Total Amount </label>
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
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="name">SL</label>
                                                        <label for="name">Invoice Number</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="product">Show</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Due Amount</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="quality">Payment Amount</label>
                                                    </div>
                                                    <div class="col-lg-4 p-0 pe-1">
                                                        <label for="total">Remarks</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">

                                                        <div  class="col-lg-3 d-flex p-0 pe-1 pb-1">
                                                            <span class="pe-2 pb-1">01</span>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">--Select invoice--</option>
                                                                <option value="1">SDT-1212</option>
                                                                <option value="2">SDT-3434</option>
                                                                <option value="3">SDT-4333</option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".supplier-payment-view">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                        </div>
                                                        <div  class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <p class="form-control m-0">667</p>
                                                        </div>

                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <input type="number" class="form-control"/>
                                                        </div>
                                                        <div class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <input type="text" class="form-control"/>
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
                        <div class="tab-pane" id="supplier_payment_list" role="tabpanel">
                            <div class="row">
                                <div class="col p-0 table-responsive border-0">
                                    <table id="datatable-buttons" class="table table-bordered table-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Supplier</th>
                                                <th>Project</th>
                                                <th>Date</th>
                                                <th>Cash Payment</th>
                                                <th>Cheque Payment</th>
                                                <th>Total Payment</th>
                                                <th>Reference</th>
                                                <th>Send for Approval</th>
                                                <th>Account</th>
                                                <th>Check No.</th>
                                                <th>Log</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1235</td>
                                                <td>puja</td>
                                                <td>Hridoy</td>
                                                <td>01</td>
                                                <td>12/03</td>
                                                <td>coffee</td>
                                                <td>1205</td>
                                                <td>459909</td>
                                                <td>ok</td>
                                                <td>yes</td>
                                                <td>12</td>
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

         <!--  Extra Large modal example -->
         <div class="modal fade supplier-payment-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">View PURCHASE ORDER <i class=" fas fa-eye bx-tada"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Job No./Name</label>
                                        <p class="form-control">R-26-1</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="form-label">Requested Date:  <strong class="">2022-01-31</strong></p>
                                        <p class="form-label">Approved Date:  <strong class="">2022-01-31</strong></p>
                                        <p class="form-label">Warehouse:  <strong class="">Office Store</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive p-0 m-0">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive table-responsive w-100">
                                        <thead>
                                            <tr class="table-primary nowrap">
                                                <th>Sl No</th>
                                                <th>Product</th>
                                                <th>Base Price</th>
                                                <th>Cost Price</th>
                                                <th>Quantity</th>
                                                <th>Received Quantity</th>
                                                <th>Remaining</th>
                                                <th>Stock Quantity</th>
                                                <th>Subtotal</th>
                                                <th>Budget Head</th>
                                                <th>Budget Sub Head</th>
                                                <th>Budget Account</th>
                                                <th>Budget Available</th>
                                                <th>Expected Date</th>
                                                <th>Remark</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                                <td>1</td>
                                                <td>Fabrics Mask</td>
                                                <td>48.00</td>
                                                <td>26.00</td>
                                                <td>21502.00</td>
                                                <td>0.00</td>
                                                <td>21502</td>
                                                <td>0</td>
                                                <td>559052.00</td>
                                                <td>Cost of Goods Sold</td>
                                                <td>COGS of Masks</td>
                                                <td></td>
                                                <td>6753827</td>
                                                <td>2022-02-01</td>
                                                <td></td>
                                           </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 my-4">
                                   <p class="form-control">Qty= 21502 Febric Mask (Urgent Delivery Dt-10-02-2022)</p>
                                </div>
    
                                <div class="col-xl-12">
                                    <h4>Approval History</h4>
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive table-responsive w-100">
                                        <thead>
                                            <tr class="table-primary nowrap">
                                                <th>Sl</th>
                                                <th>Approvar</th>
                                                <th>Status</th>
                                                <th>Comments</th>
                                                <th>Status Changed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Sajida Rahman</td>
                                                <td>Approved</td>
                                                <td></td>
                                                <td>2022-01-25</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xl-12 my-4">
                                    <label for="">Comments</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Your Comment">
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