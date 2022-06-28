@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
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
                            <span class="d-none d-sm-block"> List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab Panes One -->
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                <div class="modal-body">
                  <div class="row">
                      <div class="col-md-3">
                          <div class="mb-3">
                              <label class="form-label">Package Name</label>
                              <x-input-text name="package_name" placeholder="Enter Package Name here">
                              </x-input-text>
                          </div>
                      </div>
                      <div class="col-md-3">
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                          <div>
                            <x-input-textarea name="description" placeholder="Description">
                            </x-input-textarea-outline>
                          </div>
                      </div>
                      </div>
                      <div class="col-md-3">
                        <div class="mb-3">
                          <h5 class="ms-2">Offday Counted</h5>
                          <div class="form-check form-check-danger ms-2 mt-2">
                            <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="mb-3">
                        <h5>Calculation On Join Date</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Yes</label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">No</label>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div> 
                <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body p-0">
                              <form class="repeater" enctype="multipart/form-data">
                                  <div class="row">  
                                  </div>
                                    <div data-repeater-list="group-a">
                                      <div data-repeater-item class="row removeRow">
                                        <div class="col-md-3">
                                          <div class="mb-3">
                                            <label for="basicpill-lastname-input">Leave Type</label>
                                            <x-input-select name="leave_type" :records="[]" />
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="mb-3">
                                              <label class="form-label">Max. Amount</label>
                                              <x-input-text name="max_amount" type="number" placeholder="Enter Max. Amount here">
                                              </x-input-text>
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="mb-3">
                                            <h5 class="ms-2">Leave Pay</h5>
                                            <div class="form-check form-check-danger ms-2 mt-2">
                                              <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                            </div>
                                          </div>
                                         </div>
                                         <div class="col-md-2">
                                          <div class="mb-3">
                                              <label class="form-label">Pay Amnt</label>
                                              <x-input-text name="Amount" type="number" placeholder="Enter Max. Amount here">
                                              </x-input-text>
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="mb-3">
                                            <h5>Salary Head</h5>
                                            <div class="form-check d-flex">
                                              <div class="me-5">
                                                <input class="form-check-input" type="radio" name="formRadios">
                                                <label class="form-check-label">Basic</label>
                                              </div>
                                              <div>
                                                <input class="form-check-input" type="radio" name="formRadios">
                                                <label class="form-check-label">Gross</label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-1">
                                          <button class="btn btn-outline-danger  ms-2 removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  <input data-repeater-create type="button"
                                    class="btn btn-outline-success mt-3 px-4 mt-lg-0" value="Add" />
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn  btn-outline-danger" data-bs-dismiss="modal"> Close</button>
              <button type="button" class="btn  btn-outline-success" data-bs-dismiss="modal"> Save</button>
          </div>                   
        </div>
                <!-- Tab Panes Two -->
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
                            <x-input-text type="search" name="search" />
                          </label>
                        </div>
                       </div>
                    <div class="table-responsive">
                       <table class="table w-100 table-bordered">
                    <thead>
                    <tr class="table-primary">
                        <th>Package Name</th>
                        <th>Is Off day Count</th>
                        <th>Calculation On Join Date</th>
                        <th>Log</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Leave_Female</td>
                        <td>Yes</td>
                        <td>Yes	</td>
                        <td>Create: Shonod Digital @ 2019-01-19 23:10:51
                        Update: Ohidul Hassan @ 2022-05-25 14:32:20</td>
                        <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" 
                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"><i class="mdi mdi-pencil"></i>
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
    </div> 
</div>
@endsection
@section('script')
    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
