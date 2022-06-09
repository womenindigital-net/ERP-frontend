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
@slot('title')HRMS > LEAVE TYPE @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">LEAVE TYPES</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
                class="fas fa-plus-circle"></i> Add</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
          <thead>
            <tr>
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
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->

    <!--  Extra Large modal example -->
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary">Leave Type</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->
                  <!-- journal form start -->
                  <div class="row">
                      <div class="col-md-4">
                          <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Name here.. ">
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                          <div>
                              <textarea placeholder="Leave Type Desc here" required class="form-control" rows="1"></textarea>
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
                        <input type="Number" class="form-control" id="horizontal-firstname-input" placeholder="Enter Calculation Interval.. ">
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
                        <input type="Number" class="form-control" id="horizontal-firstname-input" placeholder="Enter Leave TTL here .. ">
                    </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-4">
                        <label class="form-label">Max Carry Cash Day</label>
                        <input type="Number" class="form-control" id="horizontal-firstname-input" placeholder="Enter Max Carry Cash Day here .. ">
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