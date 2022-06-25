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
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Policy Name</label>
                        <x-input-text name="policy_name" placeholder="Enter Policy Name Here"></x-input-text>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">Over Time Start Grace</label>
                    <x-input-text name="over_time_start_grace" placeholder="Enter time in minute"></x-input-text>
                </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">Arrival Grace</label>
                    <x-input-text name="arrival_grace" placeholder="Enter arrival grace in minute"></x-input-text>
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">Lunch Break:</label>
                    <x-input-text name="lunch_break" placeholder="Lunch Break in minute"></x-input-text>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Lunch Time</label>
                  <div class="input-group" id="timepicker-input-group3">
                    <x-input-text name="lunch_time" type="time"></x-input-text>
                  </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Working Hour </label>
                  <x-input-text name="working_hour" placeholder="Enter working hour"></x-input-text>
              </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                  <div>
                    <label class="form-label">Sun In</label>
                    <div class="input-group" id="timepicker-input-group3">
                      <x-input-text name="sun_in" type="time"></x-input-text>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Sun Out</label>
                  <div class="input-group" id="timepicker-input-group3">
                    <x-input-text name="sun_out" type="time"></x-input-text>
                  </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Is Next Day</label>
                <div class="square-switch">
                  <input type="checkbox" id="square-switch3" switch="bool"  checked />
                  <label for="square-switch3" data-on-label="Yes"
                      data-off-label="No"></label>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <div class="mb-3">
                <div>
                  <label class="form-label">Mon In</label>
                  <div class="input-group" id="timepicker-input-group3">
                    <x-input-text name="mon_in" type="time"></x-input-text>
                  </div>
              </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Mon Out</label>
              <div class="input-group" id="timepicker-input-group3">
                <x-input-text name="mon-out" type="time"></x-input-text>
              </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label mt-3"></label>
              <div class="square-switch">
                <input type="checkbox" id="square-switch4" switch="bool" checked />
                <label for="square-switch4" data-on-label="Yes"
                    data-off-label="No"></label>
              </div>
          </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
              <div>
                <label class="form-label">Thu In</label>
                <div class="input-group" id="timepicker-input-group3">
                  <x-input-text name="thu_in" type="time"></x-input-text>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Thu Out</label>
              <div class="input-group" id="timepicker-input-group3">
                <x-input-text name="thu_out" type="time"></x-input-text>
              </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label mt-3"></label>
              <div class="square-switch">
                <input type="checkbox" id="square-switch5" switch="bool" checked />
                <label for="square-switch5" data-on-label="Yes"
                    data-off-label="No"></label>
              </div>
        </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4">
          <div class="mb-3">
            <div>
              <label class="form-label">Wed in</label>
              <div class="input-group" id="timepicker-input-group3">
                <x-input-text name="wed_in" type="time"></x-input-text>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Wed Out</label>
              <div class="input-group" id="timepicker-input-group3">
                <x-input-text name="wed_out" type="time"></x-input-text>
              </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label mt-3"></label>
              <div class="square-switch">
                <input type="checkbox" id="square-switch6" switch="bool" checked />
                <label for="square-switch6" data-on-label="Yes"
                    data-off-label="No"></label>
              </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
          <div class="mb-3">
            <div>
              <label class="form-label">Thu In</label>
              <div class="input-group" id="timepicker-input-group3">
                <x-input-text name="thu_in" type="time"></x-input-text>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Thu Out</label>
            <div class="input-group" id="timepicker-input-group3">
              <x-input-text name="thu_out" type="time"></x-input-text>
            </div>
      </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label mt-3"></label>
            <div class="square-switch">
              <input type="checkbox" id="square-switch9" switch="bool" checked />
              <label for="square-switch9" data-on-label="Yes"
                  data-off-label="No"></label>
            </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-4">
      <div class="mb-3">
        <div>
          <label class="form-label">Fri In</label>
          <div class="input-group" id="timepicker-input-group3">
            <x-input-text name="fri_in" type="time"></x-input-text>
          </div>
        </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="mb-3">
      <label class="form-label">Fri out</label>
          <div class="input-group" id="timepicker-input-group3">
            <x-input-text name="fri_out" type="time"></x-input-text>
          </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="mb-3">
      <label class="form-label mt-3"></label>
        <div class="square-switch">
          <input type="checkbox" id="square-switch11" switch="bool" checked  />
          <label for="square-switch11" data-on-label="Yes"
              data-off-label="No"></label>
        </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
      <div class="mb-3">
        <div>
          <label class="form-label">Sat In</label>
          <div class="input-group" id="timepicker-input-group3">
            <x-input-text name="sat_in" type="time"></x-input-text>
          </div>
        </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="mb-3">
        <label class="form-label">Sat Out</label>
            <div class="input-group" id="timepicker-input-group3">
              <x-input-text name="sat_out" type="time"></x-input-text>
            </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="mb-3">
      <label class="form-label mt-3"></label>
        <div class="square-switch">
          <input type="checkbox" id="square-switch12" switch="bool" checked />
          <label for="square-switch12" data-on-label="Yes"
              data-off-label="No"></label>
        </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
      <div class="mb-3">
          <label class="form-label">Deduct Leave for</label>
          <div class="square-switch">
            <input type="checkbox" id="square-switch10" switch="bool" checked />
            <label for="square-switch10" data-on-label="Yes"
                data-off-label="No"></label>
        </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="mb-3">
      <label class="form-label">Deduct in minute</label>
      <x-input-text name="deduct_in_minute" type="number" placeholder="Enter Deduct in minute "></x-input-text>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-10">
      <div class="mb-3">
        <label class="form-label">Policy Desc</label>
        <div>
          <x-input-textarea name="policy_desc"></x-input-textarea>
        </div>
      </div>
  </div>
</div>
</div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                        <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
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
                        <th>Policy Name </th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Bakery_Policy</td>
                        <td>Create: Shonod Digital @ 2019-01-19 23:22:09
                        Update: Ohidul Hassan @ 2022-05-15 12:53:40</td>
                        <td>
                        <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                            <i class="mdi mdi-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                            class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                            class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
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