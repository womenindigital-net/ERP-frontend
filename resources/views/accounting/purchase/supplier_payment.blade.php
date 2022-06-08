@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
   
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
                                                                    <x-input-text name="yousuf" placeholder="Enter Amount Here"></x-input-text>
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
                                                                    <x-input-text name="yousuf" placeholder="Enter Cheque No. Here"></x-input-text>
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
                                                            <x-input-text name="yousuf"></x-input-text>
                                                        </div>

                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number"></x-input-text>
                                                        </div>
                                                        <div class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <x-input-text name="yousuf" type="text"></x-input-text>
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
                        <div class="tab-pane" id="supplier_payment_list" role="tabpanel">
                             <!-- end row -->
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
                                            <td>Puja</td>
                                            <td>puja</td>
                                            <td>reading</td>
                                            <td>first to last</td>
                                            <td>Puja</td>
                                            <td>puja</td>
                                            <td>reading</td>
                                            <td>first to last</td>
                                            <td>yousuf</td>
                                            <td>reading</td>
                                            <td>first to last</td>
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

                </div>
            </div>
        </div>
    </div>

         <!--  Extra Large modal example -->
         <div class="modal fade supplier-payment-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Invoice view<i class=" fas fa-eye bx-tada"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Job No./Name</label>
                                        <x-input-text name="yousuf" placeholder="R-26-1"></x-input-text>
                                    </div>
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
                                    <div class="mb-3">
                                        <a href="#" class="nav-link">Click here to view the requisition</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Requisition</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="1">1::canteen raw materials (09-08-2021)</option>
                                            <option value="2">2::Canteen Cleaning Items(10-08-21)</option>
                                            <option value="3">3::Utility bill and other expenses for july 2021</option>
                                            <option value="4">4::Buy Tab for Students Arjune.</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="1">Governing Office</option>
                                            <option value="2">Operations</option>
                                            <option value="3">Finance and Accounts Section</option>
                                            <option value="4">Procurement Section</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <x-input-text name="yousuf" type="date"></x-input-text>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <strong>All Products</strong>
                                </div>
                                <div class="col-lg-6">
                                    <strong>Payable Amount:</strong>
                                </div>
                                <div class="table-responsive p-0 m-0">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive table-responsive w-100">
                                        <thead>
                                            <tr class="table-primary nowrap">
                                                <th>Sl No</th>
                                                <th>Product</th>
                                                <th>Exp. Date</th>
                                                <th>Avl. Qnty</th>
                                                <th>Qnty</th>
                                                <th>Req. Price</th>
                                                <th>Price</th>
                                                <th>VAT</th>
                                                <th>Discount</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                                <td>1</td>
                                                <td>Rice Chal-CAT0034::221</td>
                                                <td>2021-09-2819</td>
                                                <td></td>
                                                <td>150.00</td>
                                                <td>60.00</td>
                                                <td>60.00</td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td>9000.00</td>
                                           </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row border border-primary my-3">
                                <div class="col-xl-6 my-4">
                                    <strong>Document</strong>
                                   <div>
                                    <img src="http://67.227.249.189/~pfdavtcadmin/pfdavtc/public/uploads/document/purchase-order" alt="ImageHere" width="160" height="100">
                                    <br>
                                    <img src="http://67.227.249.189/~pfdavtcadmin/pfdavtc/public/uploads/document/purchase-order" alt="ImageHere" width="160" height="100">
                                   </div>
                                </div>
                                <div class="col-xl-6 my-4">
                                    <strong>Note</strong>
                                   <p class="form-control">Qty= 21502 Febric Mask (Urgent Delivery Dt-10-02-2022)</p>
                                </div>
                            </div>
                            <div class="row">
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
                                    <x-input-textarea name="yousuf" rows="1"></x-input-textarea>
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
    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
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