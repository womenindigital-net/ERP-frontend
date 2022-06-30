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
                            <div class="row pb-5">
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job title:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="job_title_select"
                                        :records="[]" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Depertmnet:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="deaprtment_select"
                                        :records="[]" />
                                    </div>
                                </div>
                            </div>
                            <form class="repeater pb-5" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-3 p-0 pe-1">
                                        <label for="product">Name</label>
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1">
                                        <label for="subtotal">Date</label>
                                    </div>
                                    <div class="col-lg-2 p-0 pe-1">
                                        <label for="quality">time</label>
                                    </div>
                                    <div class="col-lg-3 p-0 pe-1">
                                        <label for="quality">Interviewer</label>
                                    </div>
                                    
                                </div>
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item class="row removeRow">

                                        <div  class="col-lg-3 d-flex p-0 pe-1 pb-1 ">
                                            <x-input-text name="interviewer_name" type="text"></x-input-text>
                                        </div>
                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                            <x-input-text name="date" type="date"></x-input-text>
                                        </div>
                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                            <x-input-text name="applying_time" type="time"></x-input-text>
                                        </div>
                                        <div class="col-lg-3 p-0 pe-1 pb-1 d-flex">
                                            <x-input-select name="interviewer"
                                        :records="[]" />
                                            <div class="">
                                                <button class="btn btn-danger ms-2 removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
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
                                <th>Depertmnet</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>time</th>
                                <th>Interviewer</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>HR</td>
                                <td>Demo</td>
                                <td>12/02</td>
                                <td>12.00pm</td>
                                <td>Application</td>
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
                              <h5 class="modal-title text-primary">Assigning Interviewer Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="modal-body pb-0">
                                <div class="row pb-5">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job title:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="job_title_select"
                                            :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Depertmnet:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="deaprtment_select"
                                            :records="[]" />
                                        </div>
                                    </div>
                                </div>
                                <form class="repeater pb-5" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-3 p-0 pe-1">
                                            <label for="product">Name</label>
                                        </div>
                                        <div class="col-lg-2 p-0 pe-1">
                                            <label for="subtotal">Date</label>
                                        </div>
                                        <div class="col-lg-2 p-0 pe-1">
                                            <label for="quality">time</label>
                                        </div>
                                        <div class="col-lg-3 p-0 pe-1">
                                            <label for="quality">Interviewer</label>
                                        </div>
                                        
                                    </div>
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="row removeRow">
    
                                            <div  class="col-lg-3 d-flex p-0 pe-1 pb-1 ">
                                                <x-input-text name="interviewer_name" type="text"></x-input-text>
                                            </div>
                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                <x-input-text name="date" type="date"></x-input-text>
                                            </div>
                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                <x-input-text name="applying_time" type="time"></x-input-text>
                                            </div>
                                            <div class="col-lg-3 p-0 pe-1 pb-1 d-flex">
                                                <x-input-select name="interviewer"
                                            :records="[]" />
                                                <div class="">
                                                    <button class="btn btn-danger ms-2 removeBtn">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                </form>
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
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection