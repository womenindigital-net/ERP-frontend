@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#add" role="tab">
              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block">Add</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">List</span>
            </a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
          <div class="tab-pane active" id="add" role="tabpanel">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Company Name </label>
                      <x-input-text name="company_name" placeholder="Company Name"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Total Department:</label>
                      <x-input-text name="total_department" placeholder="Total Department"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Manager </label>
                      <x-input-text name="manager" placeholder="Manager"></x-input-text>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Street 1</label>
                      <x-input-text name="street_1" placeholder="Street 1"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Street 2</label>
                      <x-input-text name="street_2" placeholder="Street 2"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">City </label>
                      <x-input-text name="city" placeholder="City"></x-input-text>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Zip Code </label>
                      <x-input-text type="number" name="zip_code" placeholder="Zip Code"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">State </label>
                      <x-input-text name="state" placeholder="State"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Country </label>
                      <x-input-text name="country" placeholder="Country"></x-input-text>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Email </label>
                      <x-input-text name="email" placeholder="Email"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Phone 1:</label>
                      <x-input-text name="phone_1" placeholder="Phone 1"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Phone 2: </label>
                      <x-input-text name="phone_2" placeholder="Phone 2"></x-input-text>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Fax: </label>
                      <x-input-text name="fax" placeholder="Fax"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Mobile: </label>
                      <x-input-text name="mobile" placeholder="Mobile"></x-input-text>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Website Address: </label>
                      <x-input-text name="website_address" placeholder="Website Address"></x-input-text>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Project </label>
                      <x-input-select name="project_id" :records="[]" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Logo </label>
                      <x-input-text type="file" name="logo" placeholder="Logo"></x-input-text>
                    </div>
                  </div>
                </div>
                <!-- journal form end -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn  btn-success" data-bs-dismiss="modal">Save</button>
              </div>
            </div><!-- /.modal-content -->

          </div>
          <div class="tab-pane" id="list" role="tabpanel">
            <div class="table-responsive">
              <table class="table w-100 table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>Name</th>
                    <th>Total Dept</th>
                    <th>Manager</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Mobile</th>
                    <th>Log</th>
                    <th>Action</th>
                  </tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2022-03-29</td>
                    <td>7</td>
                    <td>Danny Rahaman</td>
                    <td>Dhaka</td>
                    <td>Bangladesh</td>
                    <td>chairman@pfda-vtc.org</td>
                    <td>8801751778308</td>
                    <td>8801751778308</td>
                    <td>8801751778308</td>
                    <td>
                      <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span>
                      <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
                    </td>
                    <td>
                      <button type="button"
                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                        <i class="mdi mdi-eye"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                        <i class="fas fa-check"></i>
                      </button>
                      <button type="button"
                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                          class="fas fa-check"></i>
                      </button>
                      <button type="button"
                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
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
                      <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->
@endsection