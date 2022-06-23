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
                              <label class="form-label">Name</label>
                              <x-input-text name="name"  placeholder="Enter Name here"></x-input-text>
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                          <div>
                            <x-input-textarea name="description"  placeholder=""></x-input-textarea>
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                          <h5>Calculation Type</h5>
                          <div class="form-check d-flex">
                            <div class="me-5">
                              <input class="form-check-input" type="radio" name="formRadios">
                              <label class="form-check-label">Flat</label>
                            </div>
                            <div>
                              <input class="form-check-input" type="radio" name="formRadios">
                              <label class="form-check-label">Calculative</label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Calculation Interval</label>
                        <x-input-text name="calculation_interval" type="number" placeholder="Enter Calculation Interval"></x-input-text>
                    </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <h5>Calculatino Base</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Number of Days </label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Work in Organization</label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                          <h5>Measurement Unit</h5>
                          <div class="form-check d-flex">
                            <div class="me-5">
                              <input class="form-check-input" type="radio" name="formRadios">
                              <label class="form-check-label">Hour</label>
                            </div>
                            <div>
                              <input class="form-check-input" type="radio" name="formRadios">
                              <label class="form-check-label">Day</label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Leave TTL</label>
                        <x-input-text name="leave_ttl" type="number" placeholder="Enter Leave TTL here"></x-input-text>
                    </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-4">
                        <label class="form-label">Max Carry Cash Day</label>
                        <x-input-text name="max_carry_cash_day" type="number" placeholder="Enter Max Carry Cash Day here"></x-input-text>
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="mb-3">
                        <h5>Leave Nature</h5>
                        <div class="form-check d-flex">
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios" >
                            <label class="form-check-label">Enjoyed</label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label"> Carry Over </label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios" >
                            <label class="form-check-label">Cashed</label>
                          </div>
                          <div class="me-5">
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label"> Carry Over or Cashed </label>
                          </div>
                          <div>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Maternal Leave</label>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                      <div class="mb-3">
                          <label class="form-label">Is Active</label>
                          <div class="square-switch">
                            <input type="checkbox" id="square-switch10" switch="bool" checked />
                            <label for="square-switch10" data-on-label="Yes"
                                data-off-label="No"></label>
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
                            <th>Name</th>
                            <th>Measure Unit</th>
                            <th>Calculation Type</th>
                            <th>Calculation Interval</th>
                            <th>Calculation Base</th>
                            <th>Nature</th>
                            <th>Leave TTL</th>
                            <th>Log</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Maternity Leave</td>
                            <td>D</td>
                            <td>Flat</td>
                            <td></td>
                            <td></td>
                            <td>Maternal Leave	</td>
                            <td>0</td>
                            <td>Create: Shonod Digital @ 2019-01-19 23:04:23</td>
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
