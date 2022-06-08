@extends('layouts.master')

@section('title')
    MATERIAL COLLECTS
@endsection

@section('css')
@endsection

@section('content')
    @component('components.breadcrumb')
    @endcomponent
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Material Collects </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Material Collects List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Select Name</label>
                                                <select class="form-control select2 form-select">
                                                    <option>--Select--</option>
                                                    <option value="1">Abul hasnat</option>
                                                    <option value="2">Achia Nila</option>
                                                    <option value="3">Airin Shiddique</option>
                                                    <option value="4">Amal Rozareo</option>
                                                    <option value="5">Anas Bin Iqbal</option>
                                                    <option value="7">Asad Zaman</option>
                                                    <option value="8">Arup Mandal</option>
                                                    <option value="9">Ashiqur Rahman</option>
                                                    <option value="10">Atiya Azim</option>
                                                    <option value="11">Badshah Faysal</option>
                                                    <option value="12">Bijoy Rozareo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Select Date</label>
                                                <x-input-text name="name" type="date"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Warehouse (Materials Taken From)</label>
                                                <select class="form-control select2 form-select">
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

                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class=" text-center mb-4">Raw Material Lists</h2>
                                                    <form class="repeater" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <label for="name">Category Name</label>
                                                            </div>
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <label for="product">Product Name</label>
                                                            </div>
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <label for="product">Avl Stock</label>
                                                            </div>
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <label for="total">Quantity</label>
                                                            </div>
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <label for="total">Produce Category</label>
                                                            </div>
                                                            <div class="col-lg-2 p-0 pe-1">
                                                                <label for="total">Produce Product</label>
                                                            </div>
                                                        </div>
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item class="row">
                                                                <div
                                                                    class="col-lg-2 d-flex p-0 pe-1 pb-1 align-items-center">
                                                                    <select id="formrow-inputState" class="form-select">
                                                                        <option selected="">Select</option>
                                                                        <option value="1">4 Water Purifier & 6 Fire Exti
                                                                        </option>
                                                                        <option value="2">AC (11)</option>
                                                                        <option value="3">Angel Chef Hot Kitchen
                                                                        </option>
                                                                        <option value="4">Anklet</option>
                                                                        <option value="5">Annual Anniversary</option>
                                                                        <option value="6">Annual Anniversary of PFDA - V
                                                                        </option>
                                                                        <option value="7">antivirus</option>
                                                                        <option value="8">Application Development
                                                                        </option>
                                                                        <option value="9">Art Finished Goods </option>
                                                                        <option value="10">Art Raw Materials </option>
                                                                        <option value="11">Art Training Materials
                                                                        </option>
                                                                        <option value="12">Asus Laptop </option>
                                                                        <option value="13">Attend meetings, Workshop,
                                                                            Sem
                                                                        </option>
                                                                        <option value="14">BAKERY</option>
                                                                    </select>
                                                                </div>
                                                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                    <select id="formrow-inputState" class="form-select">
                                                                        <option selected="">Select</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-2 p-0 pe-1 pb-1">
                                                                    <p class="form-control m-0">25</p>
                                                                </div>
                                                                <div class="col-lg-2 p-0 pe-1 pb-1">
                                                                    <x-input-text name="name" type="number">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                    <select id="formrow-inputState" class="form-select">
                                                                        <option selected="">Select</option>
                                                                        <option value="1">4 Water Purifier & 6 Fire Exti
                                                                        </option>
                                                                        <option value="2">AC (11)</option>
                                                                        <option value="3">Angel Chef Hot Kitchen
                                                                        </option>
                                                                        <option value="4">Anklet</option>
                                                                        <option value="5">Annual Anniversary</option>
                                                                        <option value="6">Annual Anniversary of PFDA - V
                                                                        </option>
                                                                        <option value="7">antivirus</option>
                                                                        <option value="8">Application Development
                                                                        </option>
                                                                        <option value="9">Art Finished Goods </option>
                                                                        <option value="10">Art Raw Materials </option>
                                                                        <option value="11">Art Training Materials
                                                                        </option>
                                                                        <option value="12">Asus Laptop </option>
                                                                        <option value="13">Attend meetings, Workshop,
                                                                            Sem
                                                                        </option>
                                                                        <option value="14">BAKERY</option>
                                                                    </select>
                                                                </div>
                                                                <div
                                                                    class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                    <select id="formrow-inputState" class="form-select">
                                                                        <option selected="">Select</option>
                                                                    </select>
                                                                    <button class="btn btn-danger btn-rounded ms-2">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="ms-2">
                                                            <button data-repeater-create type="button"
                                                                class="btn btn-success waves-effect waves-light">Add</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                             <!-- form start -->
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
                                            <th>Stock Receive By</th>
                                            <th>Receive From</th>
                                            <th>Receive Date</th>
                                            <th>Total Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Airin Shiddique</td>
                                            <td>Office Outlet</td>
                                            <td>2021-03-03</td>
                                            <td>1</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                                    <i class=" fas fa-eye"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                                    <i class="fas fa-pen"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                    <i class="fas fa-trash-alt"></i></button>
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
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                               <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Edit Journal -->
    <div class="modal fade material-callects-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Add Material Collects </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Select Name</label>
                                <select class="form-control select2 form-select">
                                    <option>--Select--</option>
                                    <option value="1">Abul hasnat</option>
                                    <option value="2">Achia Nila</option>
                                    <option value="3">Airin Shiddique</option>
                                    <option value="4">Amal Rozareo</option>
                                    <option value="5">Anas Bin Iqbal</option>
                                    <option value="7">Asad Zaman</option>
                                    <option value="8">Arup Mandal</option>
                                    <option value="9">Ashiqur Rahman</option>
                                    <option value="10">Atiya Azim</option>
                                    <option value="11">Badshah Faysal</option>
                                    <option value="12">Bijoy Rozareo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Select Date</label>
                                <x-input-text name="name" type="date"></x-input-text>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Warehouse (Materials Taken From)</label>
                                <select class="form-control select2 form-select">
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
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class=" text-center mb-4">Raw Material Lists</h2>
                                    <form class="repeater" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="name">Category Name</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="product">Product Name</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="product">Avl Stock</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="total">Quantity</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="total">Produce Category</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="total">Produce Product</label>
                                            </div>
                                        </div>
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div class="col-lg-2 d-flex p-0 pe-1 pb-1 align-items-center">
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Select</option>
                                                        <option value="1">4 Water Purifier & 6 Fire Exti
                                                        </option>
                                                        <option value="2">AC (11)</option>
                                                        <option value="3">Angel Chef Hot Kitchen
                                                        </option>
                                                        <option value="4">Anklet</option>
                                                        <option value="5">Annual Anniversary</option>
                                                        <option value="6">Annual Anniversary of PFDA - V
                                                        </option>
                                                        <option value="7">antivirus</option>
                                                        <option value="8">Application Development
                                                        </option>
                                                        <option value="9">Art Finished Goods </option>
                                                        <option value="10">Art Raw Materials </option>
                                                        <option value="11">Art Training Materials
                                                        </option>
                                                        <option value="12">Asus Laptop </option>
                                                        <option value="13">Attend meetings, Workshop,
                                                            Sem
                                                        </option>
                                                        <option value="14">BAKERY</option>
                                                    </select>
                                                </div>
                                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Select</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1 pb-1">
                                                    <p class="form-control m-0">25</p>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1 pb-1">
                                                    <x-input-text name="name" type="number">
                                                    </x-input-text>
                                                </div>
                                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Select</option>
                                                        <option value="1">4 Water Purifier & 6 Fire Exti
                                                        </option>
                                                        <option value="2">AC (11)</option>
                                                        <option value="3">Angel Chef Hot Kitchen
                                                        </option>
                                                        <option value="4">Anklet</option>
                                                        <option value="5">Annual Anniversary</option>
                                                        <option value="6">Annual Anniversary of PFDA - V
                                                        </option>
                                                        <option value="7">antivirus</option>
                                                        <option value="8">Application Development
                                                        </option>
                                                        <option value="9">Art Finished Goods </option>
                                                        <option value="10">Art Raw Materials </option>
                                                        <option value="11">Art Training Materials
                                                        </option>
                                                        <option value="12">Asus Laptop </option>
                                                        <option value="13">Attend meetings, Workshop,
                                                            Sem
                                                        </option>
                                                        <option value="14">BAKERY</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Select</option>
                                                    </select>
                                                    <button class="btn btn-danger btn-rounded ms-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ms-2">
                                            <button data-repeater-create type="button"
                                                class="btn btn-success waves-effect waves-light">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- journal form end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Close</button>
                <button type="button" class="btn btn-success" id="sa-position">
                    Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
@endsection
@section('script')
    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
