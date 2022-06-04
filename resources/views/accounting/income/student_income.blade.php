@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

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
                            <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                <i class="mdi mdi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="bx bx-dollar"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-arrow-circle-right"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                <i class="fas fa-trash-alt"></i>
                                </button>
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
                                        <x-input-text name="" placeholder="Student ID">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Payment Date</label>
                                        <x-input-text type="date" name="" placeholder="dd M, yyyy">
                                        </x-input-text>
                                    </div>
                                </div>
                            </div>
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
                                                            <x-input-text name="" placeholder="Receive Amount">
                                                            </x-input-text>
                                                        </div>
    
                                                        <div class="mb-3  col-lg-4">
                                                            <x-input-text name="" placeholder="">
                                                            </x-input-text>
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

    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>



@endsection
