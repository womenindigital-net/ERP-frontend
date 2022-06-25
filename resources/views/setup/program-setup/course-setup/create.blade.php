@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection

@section('content')
        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="modal-body p-0">
                          <div class="card p-0 m-0">
                              <div class="card-body">
                                  <div class="row pb-3">
                                      <div class="col-6">
                                          <label class="col-form-label">Course / Service Name</label>
                                          <x-input-text type="number" name="hh"  placeholder="">
                                          </x-input-text>
                                      </div>
                                      <div class="col-6">
                                          <label class="col-form-label">Duration</label>
                                          <x-input-text type="number" name="hh"  placeholder="">
                                          </x-input-text>
                                      </div>
                                      <div class="col-6">
                                          <label class="col-form-label">Cash Acc:</label>
                                          <select class="form-select">
                                              <option>--Select--</option>
                                              <option> 6205 :: 1st January New Year event </option>
                                              <option> 8560 :: Accounting /Tally/ Audit/Legal expenses /option>
                                              <option> 1200 :: Accounts Receivable </option>
                                              <option> 7550002 :: Accounts Staff Salary  </option>
                                          </select>
                                      </div>
                                      <div class="col-6">
                                          <label class="col-form-label">Description:</label>
                                          <x-input-textarea type="number" name="hh"  placeholder="">
                                          </x-input-textarea>
                                      </div>
                                      
                                  </div>
                                  
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-md-4"><label for="name" class="">Fee Heading</label></div>
                                                      <div class="col-md-4"><label for="name" class="">Acc No</label></div>
                                                      <div class="col-md-4"><label for="name" class="">Amount</label></div>
                                                  </div>
                                                  <form class="repeater" enctype="multipart/form-data">
                                                      <div data-repeater-list="group-a">
                                                          <div data-repeater-item class="row mb-1 removeRow">
                                                              <div class=" col-lg-4"> 
                                                                  <x-input-text name="heading" >
                                                                  </x-input-text> 
                                                              </div>
                                                              <div class=" col-lg-4 px-1">
                                                                  <x-input-select name="account_id"
                                                                  :records="[]" />

                                                              </div>                                                                  
                                                              <div class=" col-lg-4 d-flex">
                                                                  <x-input-text type="number" name="amount" >
                                                                  </x-input-text> 
                                                                  <button class="btn btn-danger btn-rounded me-3 ms-2 removeBtn">
                                                                      <i class="fas fa-trash-alt"></i>
                                                                  </button>
                                                              </div>                                                                  
                                                          </div>
                                                      </div>
                                                      <input data-repeater-create type="button" class="btn btn-success m-1 mt-lg-0" value="Add" />
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="text-end pe-2">
                            <button type="button" class="btn btn-danger waves-effect waves-light">Reset</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Save</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
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
                                <input type="search" name="search" class="form-control form-control-sm" placeholder="">
                              </label>
                            </div>
                          </div>
                       <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th>Course / Service Name</th>
                                <th>Duration</th>
                                <th>Cash Account</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Pre-Vocational Course</td>
                                <td>12</td>
                                <td>1010 :: Cash Operating Account</td>
                                <td>Create: Shonod Digital @ <br> 2018-08-30 22:46:52 <br>
                                    Update: Shonod Digital @ <br> 2018-09-06 17:06:46</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-eye" data-bs-toggle="modal" data-bs-target=".Courses-view"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-pencil" data-bs-toggle="modal" data-bs-target=".Courses-view"></i>
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
            </div>
        </div>
@endsection
