@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
   
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Purchase Order @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#purchase_order" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Purchase Order Setup</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#purchase_order_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Purchase Order List</span>    
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="purchase_order" role="tabpanel">
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
                                        <label class="form-label">Requisition</label>
                                        <select class="form-control select2">
                                            <option>--Select--</option>
                                            <option value="1">1::Canteen Raw material</option>
                                            <option value="2">2::Canteen Raw material 05-04-2022</option>
                                            <option value="3">3::Mask Production Cost</option>
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
                                        <label>Date</label>
                                        <x-input-text name="yousuf" type="date"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="m-3 mt-4">
                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".purchase-order-view">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- 6th row start  -->
                                            <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Discount</label>
                                                        <div class="col-8">
                                                        <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Item</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> Cost</label>
                                                        <div class="col-8">
                                                            <strong class="form-control">0</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <label for="horizontal-firstname-input" class="col-4 text-end col-form-label"> VAT</label>
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
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="name">SL</label>
                                                        <label for="name">Product</label>
                                                    </div>
                                                    <div class="col-lg-2 p-0 pe-1">
                                                        <label for="product">Exp. Date</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="product">Avl. Qnty </label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="quality">Qnty</label>
                                                    </div>
                                                    <div class="col-lg-1 p-0 pe-1">
                                                        <label for="total">Req. Price</label>
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
                                                        <label for="subtotal">Subtotal</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">

                                                        <div  class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                                            <span class="pe-2 pb-1 mt-2">01</span>
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
                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="date"></x-input-text>
                                                        </div>
                                                        <div  class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number" readonly="ture"></x-input-text>
                                                        </div>

                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number" readonly="ture"></x-input-text>
                                                        </div>

                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number" readonly="ture"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number" readonly="ture"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number" readonly="ture"></x-input-text>
                                                        </div>
                                                        <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf" type="number" readonly="ture"></x-input-text>
                                                        </div>
                                                        <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <input type="number" class="form-control"/>
                                                            <button class="btn btn-danger ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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
                        <div class="tab-pane" id="purchase_order_list" role="tabpanel">  
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
                                            <th class="nowrap">action</th>
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
                                            <td>Puja</td>
                                            <td>puja</td>
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
     <div class="modal fade purchase-order-view" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <p class="form-label">Posted By:  <strong class="">Md. Kutubuddin</strong></p>
                                    <p class="form-label">Approved By:  <strong class="">Sajida Rahman</strong></p>
                                    <p class="form-label">Requisition ID:  <strong class="">69</strong></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <p class="form-label">Requested Date:  <strong class="">2022-01-31</strong></p>
                                    <p class="form-label">Approved Date:  <strong class="">2022-01-31</strong></p>
                                    <p class="form-label">Warehouse:  <strong class="">Office Store</strong></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <p class="form-label">Project:  <strong class="">Administration</strong></p>
                                    <p class="form-label">Approved Amount:  <strong class="">1591148.00</strong></p>
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
       <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
@section('script-bottom')
@endsection