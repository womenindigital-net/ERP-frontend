@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')

<!-- Sweet Alert-->
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Vocational Evalution @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body ">
                <div class="d-flex justify-content-between pb-3">
                    <h3>VOCATIONAL STUDENT EVALUTIONS</h3>
                    <button type="button" class="btn btn-outline-info waves-effect waves-light " data-bs-toggle="modal"
                        data-bs-target=".material-callects-modal-xl-add"> <i class="fas fa-plus-circle"></i>
                        Add</button>

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
                            <tr>
                                <th>Student Name</th>
                                <th>Production Date</th>
                                <th>Total Product Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Adiba Atiar</td>
                                <td>2021-03-02</td>
                                <td>1</td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                            class="fas fa-trash-alt" id="sa-warning"></i></button>
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
</div> <!-- end col -->



<!--  Edit Journal -->
<div class="modal fade material-callects-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"> Add Vocational Student Evalution Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- journal form start -->
                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Select Date</label>
                            <div class="input-group" id="datepicker1">
                                <input type="text" class="form-control" placeholder="dd M, yyyy"
                                    data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                    data-provide="datepicker">

                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card">
                            <div class="card-body p-0">
                                <h2 class=" text-center mb-4">Raw Material Lists</h2>
                                <form class="repeater" enctype="multipart/form-data">
                                    <div class="row px-3">
                                        <div class="col p-0 ">
                                            <label class="m-0" for="name">Category Name </label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="product">Sub Category</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="product">No of Production</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Target</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Wastage</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Time Taken</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Work Quality</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Delivery Complete</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Follow Ins.</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Generalizatio</label>
                                        </div>
                                        <div class="col p-0 ">
                                            <label class="m-0" for="total">Adaption</label>
                                        </div>
                                        <div class="col-lg-2 p-0 ">
                                            <label class="m-0" for="total">Remarks</label>
                                        </div>
                                    </div>
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="row px-3">
                                            <div class="col d-flex p-0 pb-1 align-items-center">
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected="">Select</option>
                                                    <option value="1">4 Water Purifier & 6 Fire Exti</option>
                                                    <option value="2">AC (11)</option>
                                                    <option value="3">Angel Chef Hot Kitchen</option>
                                                    <option value="4">Anklet</option>
                                                    <option value="5">Annual Anniversary</option>
                                                    <option value="6">Annual Anniversary of PFDA - V</option>
                                                    <option value="7">antivirus</option>
                                                    <option value="8">Application Development</option>
                                                    <option value="9">Art Finished Goods </option>
                                                    <option value="10">Art Raw Materials </option>
                                                    <option value="11">Art Training Materials </option>
                                                    <option value="12">Asus Laptop </option>
                                                    <option value="13">Attend meetings, Workshop, Sem </option>
                                                    <option value="14">BAKERY</option>
                                                </select>
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <select id="formrow-inputState" class="form-select">
                                                    <option selected="">Select</option>
                                                    <option value="1">4 Water Purifier & 6 Fire Exti</option>
                                                    <option value="2">AC (11)</option>
                                                    <option value="3">Angel Chef Hot Kitchen</option>
                                                    <option value="4">Anklet</option>
                                                    <option value="5">Annual Anniversary</option>
                                                    <option value="6">Annual Anniversary of PFDA - V</option>
                                                    <option value="7">antivirus</option>
                                                    <option value="8">Application Development</option>
                                                    <option value="9">Art Finished Goods </option>
                                                    <option value="10">Art Raw Materials </option>
                                                    <option value="11">Art Training Materials </option>
                                                    <option value="12">Asus Laptop </option>
                                                    <option value="13">Attend meetings, Workshop, Sem </option>
                                                    <option value="14">BAKERY</option>
                                                </select>
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class=" col p-0 pb-1">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="col-lg-2 p-0 pb-1 align-self-center d-flex">
                                                <input type="text" class="form-control" />
                                                <button class="btn btn-danger btn-rounded ms-2">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <button data-repeater-create type="button"
                                            class="btn btn-success font-size-16 waves-effect waves-light"> Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- journal form end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i
                        class="bx bx-exit"></i> Close</button>
                <button type="button" class="btn font-size-16 btn-success" id="sa-position"><i class="bx bx-save"></i>
                    Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Sweet alert init js-->
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>
@endsection