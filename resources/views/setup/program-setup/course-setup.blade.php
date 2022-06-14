@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".course-add-or-edit">Add</button>
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
        </div> <!-- end col -->
    </div> <!-- end row -->

<!-- Add And Edit -->
<div class="modal fade course-add-or-edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Course Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- view -->
<div class="modal fade Courses-view" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Course View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6">
                                <label class="col-form-label">Course / Service Name</label>
                                <x-input-text type="number" name="courswe_service_name"  placeholder="" readonly>
                                </x-input-text>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Duration</label>
                                <x-input-text type="number" name="duration"  placeholder="" readonly>
                                </x-input-text>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Cash Acc:</label>
                                <p class="form-control" >6205 :: 1st January New Year event</p>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">Description:</label>
                                <x-input-text type="number" rows="1" name="description"  placeholder="" readonly>
                                </x-input-text>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row mb-1 ">
                                                    <div class=" col-lg-4">   
                                                         <input type="text" readonly id="name" name="untyped-input" class="form-control" />
                                                    </div>
                                                    <div class=" col-lg-4 px-1">
                                                        <input type="text" readonly id="name" name="untyped-input" class="form-control" />
                                                    </div>                                                                  
                                                    <div class=" col-lg-4">
                                                        <input type="text" readonly id="name" name="untyped-input" class="form-control" />
                                                    </div>                                                                  
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')

<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
