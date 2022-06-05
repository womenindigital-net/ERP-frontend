@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')  FINISHED GOODS @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body pt-5">
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
                                            <option value="1">Canteen Logistic Materials</option>
                                            <option value="2">Canteen Raw material</option>
                                            <option value="3">Office Outlet</option>
                                            <option value="4">Office Programme</option>
                                            <option value="5">Office Store</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <x-input-text name="yousuf" type="date"></x-input-text>
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
                                                                <option>Select</option>
                                                                <option value="1">4 Water Purifier & 6 Fire Exit</option>
                                                                <option value="2">AlAC (11)</option>
                                                                <option value="3">Angel Chef Hot Kitchen</option>
                                                                <option value="4">Anklet</option>
                                                                <option value="5">Annual Anniversary</option>
                                                                <option value="6">Annual Anniversary of PFDA - V</option>
                                                                <option value="8">antivirus</option>
                                                                <option value="9">Application Development</option>
                                                                <option value="10">Art Finished Goods</option>
                                                                <option value="11">Art Raw Materials</option>
                                                                <option value="12">Art Training Materials </option>
                                                                <option value="13">Asus Laptop </option>
                                                                <option value="14">Attend meetings, Workshop, Sem </option>
                                                                <option value="15">BAKERY </option>
                                                                <option value="16">Bakery Equipment </option>
                                                                <option value="17">Bakery finish products </option>
                                                                <option value="18">Bakery Logistic Materials </option>
                                                                <option value="19">Bakery Raw Materials </option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-3 p-0 pe-1 pb-1">
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected="">Select</option>
                                                            </select>
                                                        </div>
                                                        <div  class=" col-lg-3 p-0 pe-1 pb-1">
                                                            <x-input-text name="yousuf"></x-input-text>
                                                        </div>
                                                        <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <x-input-text name="yousuf"></x-input-text>
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
                                            <!-- 7th row start  -->
                                            <div class="row mt-3 justify-content-center ">
                                                <div class="col-lg-6">
                                                    <div class="row mb-2">
                                                        <label for="horizontal-firstname-input" class="col-2 text-end col-form-label">Note</label>
                                                        <div class="col-10">
                                                        <x-input-text name="yousuf" placeholder="Enter Note" ></x-input-text>
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
                                            <th class="">Warehouse</th>
                                            <th class="">Added Date</th>
                                            <th class="">Added By</th>
                                            <th class="">Log</th>
                                            <th class="">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Puja</td>
                                            <td>puja</td>
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
                                        <tr>
                                            <td>Puja</td>
                                            <td>puja</td>
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
                                    <p class="form-control">Office Store</p>
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
                            <h2 class=" text-center mb-4">Product Requirement Details</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 p-0">
                                <div class="card">
                                    <div class="card-body py-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr class="table-primary text-center">
                                                        <th>Sl No</th>
                                                        <th>Product Name</th>
                                                        <th>Product Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>1</td>
                                                        <td>Anklet - Brown & Black</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>2</td>
                                                        <td>Anklet - Dark Green 2</td>
                                                        <td>5</td>
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