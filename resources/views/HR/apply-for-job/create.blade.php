@extends('layouts.master')
@section('css')
@endsection
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
                                    <label for="example-text-input" class="col-md-4">Is company employee:</label>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio1" id="btnradio4">
                                        <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                        <input type="radio" class="btn-check" name="btnradio1" id="btnradio5" checked="">
                                        <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                    </div>
                                </div>
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">First Name:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="f_name" type="text" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Last Name:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="l_name" type="text" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Mobile no:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="mobile_no" type="text" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Email:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="email_add" type="text" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applying For:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="applying_for"
                                        :records="[]" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Date of Birth:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="dob" type="date" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">CV upload*:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="cv_upload" type="file" />
                                    </div>
                                </div>
                            </div>
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
                                <th>Name</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Applying Position</th>
                                <th>DOB</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Test</td>
                                <td>+88017</td>
                                <td>abc@gmail.com</td>
                                <td>Office Manager</td>
                                <td>12/04/22</td>
                                <td>Create: Karishma Cultural @ 2018-12-27 19:24:14</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                      <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                 <!--  Extra Large modal example -->
                 <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-primary">Employee Requisition Form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="modal-body pb-0">
                                <div class="row">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Is company employee:</label>
                                        <div class="col-md-8">
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradioview" id="btnradio1" autocomplete="off" checked="">
                                                <label class="btn btn-outline-success" for="btnradio1">Yes</label>
                                                <input type="radio" class="btn-check" name="btnradioview" id="btnradio2" autocomplete="off">
                                                <label class="btn btn-outline-danger" for="btnradio2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">First Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="f_name" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Last Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="l_name" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Mobile no:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="mobile_no" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Email:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="email_add" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applying For:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="applying_for"
                                            :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Date of Birth:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="dob" type="date" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">CV upload*:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="cv_upload" type="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row modal-footer">
                                <div class="col-md-1">
                                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
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
@endsection