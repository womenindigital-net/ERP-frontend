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

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') INCOME FROM STUDENTS @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex justify-content-between pb-3 card-body">
                    <div>
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="">
                        <a href="accounting.income.student_receivable" class="btn btn-danger">Student Receivable</a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add"> <i
                                class="fas fa-plus-circle"></i> Add</button>
                    </div>
                </div>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100">
                    <thead>
                        <tr class="table-primary">
                            <th>Project Name</th>
                            <th>Voucher Date</th>
                            <th>Particulars</th>
                            <th>Trans Amount</th>
                            <th>Log</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Core Programme</td>
                            <td>2021-09-30</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Core Programme</td>
                            <td>2021-09-30</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Core Programme</td>
                            <td>2021-09-30</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-check"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                    <i class="fas fa-pen"></i></button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->


        <!--  Extra Large modal example -->
        <div class="modal fade student-income-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Add OR Edit Student Income Create
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <select class="form-control form-select">
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
                                        <label for="validationCustom02" class="form-label">Student</label>
                                        <select class="form-control form-select">
                                            <option>--Select--</option>
                                            <option value="1">Aalliyah Tehzeeb Ahmed</option>
                                            <option value="2">abdullah-al-nafi antor</option>
                                            <option value="3">Abdullahil Baki</option>
                                            <option value="4">Abdur Rahman Sajid</option>
                                            <option value="5">Abid Hossain Turjo</option>
                                            <option value="6">Abid Kabir Chowdhury</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Student ID</label>
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" placeholder="Student ID" value="BTY-12" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                                data-provide="datepicker">
    
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row ms-3">
                                <div class="col-4">
                                    <h4 class="text-danger">Total Amount : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-success"> Total Paid : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table nowrap mb-0">
    
                                                    <thead>
                                                        <tr class="table-primary text-center">
                                                            <th>Food Subsidy</th>
                                                            <th>Monthly Fees Subsidy</th>
                                                            <th>Transport Subsidy</th>
                                                            <th>Other Subsidy</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
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
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            </form>
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div class="row">
                                                   <div class="col-lg-4   pe-1">
                                                    <label for="name">Payment For</label>
                                                   
                                                    </div>
                                                   <div class="col-lg-4   pe-1">
                                                    <label for="email">Payment Amount </label>
                                                    
                                                   </div>
                                                   <div class="col-lg-4  pe-1">
                                                    <label for="subject">Receive Amount For</label>
                                                   
                                                   </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row">
                                                        <div class="mb-3  col-lg-4">
                                                            <select class="form-control form-select">
                                                                <option>--Select--</option>
                                                                <option value="1">Consultation Fees</option>
                                                                <option value="2">Admission for Assessment /Observation</option>
                                                                <option value="3">Pre-Vocational Course</option>
                                                                <option value="4">Vocational Course</option>
                                                                <option value="5">Karishma Cultural Group</option>
                                                                <option value="6">Cricket Course</option>
                                                                <option value="7">Therapy Course</option>
                                                            </select>
                                                        </div>
                    
                                                        <div class=" col-lg-4  pb-1">
                                                            <input type="text" class="form-control"
                                                                placeholder="Receive Amount" />
                                                        </div>
    
                                                        <div class="mb-3  col-lg-4">
                                                            <input type="text" class="form-control"/>
                                                        </div>
                                                    </div>
                    
                                                </div>
                                                <input data-repeater-create type="button"
                                                    class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </form>
                        <!-- journal form end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"> Close</button>
                        <button type="button" class="btn font-size-16 btn-success" id="sa-position"> Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Extra Large modal example -->
        <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">View Student Income Create
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <p class="form-control">Project</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Student</label>
                                        <p class="form-control">Student</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Student ID</label>
                                        <div class="input-group" id="datepicker1">
                                            <p class="form-control">Student ID</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <p class="form-control">22/2/2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-3">
                                <div class="col-4">
                                    <h4 class="text-danger">Total Amount : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-success"> Total Paid : </h4>
                                    <h5>5000 TK</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table nowrap mb-0">
    
                                                    <thead>
                                                        <tr class="table-primary text-center">
                                                            <th>Food Subsidy</th>
                                                            <th>Monthly Fees Subsidy</th>
                                                            <th>Transport Subsidy</th>
                                                            <th>Other Subsidy</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
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
    
                        </form>
                        
                        <!-- journal form end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal">Close</button>
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


    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    <!-- Init js -->
    <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>


@endsection
