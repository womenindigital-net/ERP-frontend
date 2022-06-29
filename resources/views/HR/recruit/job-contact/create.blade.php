@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <div class="modal-body pb-0">
                                <div class="row">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                            title:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="job_title" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">Department:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="depertment" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                                            Name:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="applicant_name" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">WorkStation:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="workStation" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Start
                                            date:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="start_date" type="date" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Logs:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="workStation" />
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-center">Salary & allowence</h6>
                                  <form class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="basic_salary">Basic Salary</label>
                                        </div>
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="house_allowence">House Allowence</label>
                                        </div>
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="madical_allowance">Madical Allowance</label>
                                        </div>
                                        <div class="col p-0 ps-5 text-center">
                                            <label for="total">Total</label>
                                        </div>
                                    </div>
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item="" class="row ms-1 removeRow">
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text name="basic_salary" type="number" placeholder="Basic Salary"></x-input-text>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text name="house_allowence" type="number" placeholder="House Allowence"></x-input-text>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text name="madical_allowance" type="number" placeholder="Madical Allowance"></x-input-text>
                                            </div>
                                            <div class=" col p-0 gap-1 pb-1 me-4 d-flex">
                                                <x-input-text name="total" type="number" placeholder="Total"></x-input-text>
                                                <button class="btn btn-danger waves-effect waves-light  removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create="" type="button" class="btn btn-success waves-effect waves-light mt-3 ms-1 mt-lg-0" value="Add">
                                </form>
                            </div>
                            <div class="row modal-footer">
                                <div class="col-md-1">
                                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
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
                                        <x-input-text type="search" name="search" />
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Job title</th>
                                            <th>Department</th>
                                            <th>Applicant Name</th>
                                            <th>WorkStation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                    data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="bx bx-dollar"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
                        </div>
                    </div>
                    <!--  Extra Large modal example -->
                    <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary">Job contact
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                            Title:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="job_title" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">Department:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="depertment" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                                            Name:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="applicant_name" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">WorkStation:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="workStation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-1">
                                        <button class="btn btn-danger w-100"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
