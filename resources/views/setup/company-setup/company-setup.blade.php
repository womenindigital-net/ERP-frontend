@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Sweet Alert-->
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') COMPANIES @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
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
  </div> <!-- end col -->
</div> <!-- end row -->
<!--  Extra Large modal example -->
<div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title text-primary"> Add Company
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- journal form start -->
              <!-- journal form start -->
              <div class="row">
                  <div class="col-md-4">
                      <div class="mb-3">
                          <label class="form-label">Company Name </label>
                          <x-input-text name="Company Name" placeholder="Company Name"></x-input-text>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Total Department:</label>
                      <x-input-text name="Total Department:" placeholder="Total Department:"></x-input-text>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Manager </label>
                      <x-input-text name="Manager " placeholder="Manager "></x-input-text>
                  </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Street 1</label>
                        <x-input-text name="Street 1" placeholder="Street 1"></x-input-text>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">Street 2</label>
                    <x-input-text name="Street 2" placeholder="Street 2"></x-input-text>
                  </div>
                </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">City </label>
                    <x-input-text name="City" placeholder="City"></x-input-text>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="mb-3">
                      <label class="form-label">Zip Code </label>
                      <x-input-text name="Zip Code" placeholder="Zip Code"></x-input-text>
                    </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">State </label>
                  <x-input-text name="Zip Code" placeholder="Zip Code"></x-input-text>
              </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Country </label>
                  <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Country ">
              </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Email </label>
                    <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Email ">
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Phone 1:
                </label>
                <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Phone 1:
                ">
            </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Phone 2: </label>
                <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Phone 2: ">
            </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <div class="mb-3">
                  <label class="form-label">Fax: </label>
                  <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Fax: ">
              </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Mobile: </label>
              <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Mobile: ">
          </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Website Address: </label>
              <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Website address ">
          </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Project </label>
                <select name="RefProjID" class="form-control strip-tags" id="RefProjID" required="">
                  <option value="">--Select Project--</option>
                  <option value="1">Governing Office</option>
                  <option value="2">Operations</option>
                  <option value="3">Administration</option>
                  <option value="4">Finance and Accounts Section</option>
                  <option value="6">Procurement Section</option>
                  <option value="7">Inventory Management</option>
                  <option value="8">Stock maintenance</option>
                  <option value="9">ICT Section</option>
                  <option value="10">Programme</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Logo </label>
            <input class="form-control" type="file" id="formFile">
        </div>
        </div>
      </div>
              <!-- journal form end -->

          </div>
          <div class="modal-footer">
              
              <button type="button" class="btn  btn-danger" data-bs-dismiss="modal"> Close</button>
              <button type="button" class="btn  btn-success" data-bs-dismiss="modal"> Save</button>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
 <!-- form advanced init -->
 <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

{{-- Form --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

@endsection