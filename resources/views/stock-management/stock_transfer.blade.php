@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') STOCK ISSUE @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-5">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#stock_transfer" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Stock Issue Create</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#stock_transfer_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Stock Issue List</span>    
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="stock_transfer" role="tabpanel">
                            <!-- form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <select class="form-control form-select">
                                            <option>--Select--</option>
                                            <option value="1">Administration</option>
                                            <option value="2">Angel Chef Bakery</option>
                                            <option value="3">Art, Crafts  and Paintings</option>
                                            <option value="4">Boutique Section (Tie-Dye and Block)</option>
                                            <option value="5">Core Programme </option>
                                            <option value="6">Cricket </option>
                                            <option value="7">Dance </option>
                                            <option value="8">Drama </option>
                                            <option value="9">Employment </option>
                                            <option value="10">Finance and Accounts Section </option>
                                            <option value="11">Food Catering </option>
                                            <option value="12">Governing Office </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Issue Type</label>
                                        <select class="form-control form-select">
                                            <option>--Select--</option>
                                            <option value="1">Warehouse to Warehouse</option>
                                            <option value="2">Warehouse to Customer</option>
                                            <option value="3">Warehouse to Service Provider</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Reference</label>
                                           <div class="input-group">
                                            <x-input-text name="" placeholder="Refference no here"></x-input-text>
                                           </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Issue Date</label>
                                        <x-input-text name="" type="date" placeholder="Refference no here"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Location From</label>
                                        <select class="form-control form-select">
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
                                        <label class="form-label">Location to</label>
                                        <select class="form-control form-select">
                                            <option>--Select--</option>
                                            <option value="AK">Canteen Logistic Materials</option>
                                            <option value="HI">Canteen Raw material</option>
                                            <option value="CA">Office Outlet</option>
                                            <option value="NV">Office Programme</option>
                                            <option value="OR">Office Store</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="name">SL</label>
                                                        <label for="name">Product</label>
                                                    </div>
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="product">Available Quantity</label>
                                                    </div>
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="product">Transfer Quantity</label>
                                                    </div>
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="total">	Serial</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">

                                                        <div  class="col-lg-3 d-flex p-0 pe-1 pb-1 align-items-center">
                                                            <span class="pe-2 pb-1">01</span>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">--Select--</option>
                                                                <option value="1">Coockis</option>

                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-3 p-0 pe-1 pb-1">
                                                            <x-input-text name=""></x-input-text>
                                                        </div>
                                                        <div  class=" col-lg-3 p-0 pe-1 pb-1">
                                                            <x-input-text name=""></x-input-text>
                                                        </div>
                                                        <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">  
                                                            <x-input-text name=""></x-input-text>
                                                            <button class="btn btn-danger btn-rounded ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                               <div class="ms-2">
                                                <button data-repeater-create type="button" class="btn btn-success font-size-16 waves-effect waves-light"> Add</button>
                                               </div>
                                            </form>
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
                        <div class="tab-pane" id="stock_transfer_list" role="tabpanel">
                            <div class="text-center" >
                                <button class="btn btn-danger">Send For Approval</button>
                            </div>
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
                                                <th>Project</th>
                                                <th>Type</th>
                                                <th>Reference</th>
                                                <th>Date</th>
                                                <th>Total Item Quantity</th>
                                                <th>Location From</th>
                                                <th>Location To</th>
                                                <th>Send For Approval</th>
                                                <th>Is Approved</th>
                                                <th>Approved Date</th>
                                                <th>Action Taken</th>
                                                <th>Action Date</th>
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
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>puja</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target=".finished-goods-modal-xl-view">
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
                    <h5 class="modal-title text-primary">Stock Transfer
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Project Type</label>
                                    <select class="form-control form-select">
                                        <option>--Select--</option>
                                        <option value="1">Governing Office</option>
                                        <option value="2">Operations</option>
                                        <option value="3">Administration</option>
                                        <option value="4">Finance and Accounts Section</option>
                                        <option value="5">Procurement Section </option>
                                        <option value="6">Inventory Management </option>
                                        <option value="7">Stock maintenance </option>
                                        <option value="8">ICT Section </option>
                                        <option value="9">Programme </option>
                                        <option value="10">Core Programme</option>
                                        <option value="11">Computer Section </option>
                                        <option value="12">Jewelry Section </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Issue Type</label>
                                    <select class="form-control form-select">
                                        <option>--Select--</option>
                                        <option value="1">Warehouse to Warehouse</option>
                                        <option value="2">Warehouse to Customer</option>
                                        <option value="3">Warehouse to Service Provider</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Reference</label>
                                    <x-input-text name="" placeholder="6"></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Issue Date</label>
                                    <x-input-text name="" type="date"></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Location From</label>
                                    <select class="form-control form-select">
                                        <option>--Select--</option>
                                        <option value="1">Warehouse to Warehouse</option>
                                        <option value="2">Warehouse to Customer</option>
                                        <option value="3">Warehouse to Service Provider</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Location To</label>
                                    <select class="form-control form-select">
                                        <option>--Select--</option>
                                        <option value="1">Warehouse to Warehouse</option>
                                        <option value="2">Warehouse to Customer</option>
                                        <option value="3">Warehouse to Service Provider</option>
                                    </select>
                                </div>
                            </div>
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
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                        <th>Serial</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>A-4 Paper White::1081</td>
                                                        <td>4.00</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>Ball pen::1094</td>
                                                        <td>36.00</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
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