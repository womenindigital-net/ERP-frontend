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
<!-- Responsive Table css -->
<link href="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Sweet Alert-->
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')HRMS > LEAVE PACKAGE @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">LEAVE PACKAGES</h4>
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
              <td>	Yes	</td>
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
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->
    <!--  Extra Large modal example -->
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary"> Leave Package</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->
                  <!-- journal form start -->
                  <div class="row">
                      <div class="col-md-3">
                          <div class="mb-3">
                              <label class="form-label">Package Name</label>
                              <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Package Name here.. ">
                          </div>
                      </div>
                      <div class="col-md-3">
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                          <div>
                              <textarea placeholder="Enter Iv pak Desc here" required class="form-control" rows="1"></textarea>
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
                                      <div data-repeater-item class="row">
                                        <div class="col-md-3">
                                          <div class="mb-3">
                                            <label for="basicpill-lastname-input">Leave Type</label>
                                            <select class="form-control select2 form-select">
                                              <option value="0">--Select-</option>
                                              <option value="1">Test Leave</option>
                                              <option value="2">Sick Leave</option>
                                              <option value="3">Maternity Leave</option>
                                              <option value="4">Paternity Leave</option>    
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="mb-3">
                                              <label class="form-label">Max. Amount</label>
                                              <input type="number" class="form-control" id="horizontal-firstname-input" placeholder="Enter Max. Amount here.. ">
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
                                              <input type="number" class="form-control" id="horizontal-firstname-input" placeholder="Enter Max. Amount here.. ">
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
                                          <button class="btn btn-danger  ms-2">
                                            <i class="fas fa-trash-alt"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  <input data-repeater-create type="button"
                                    class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                              </form>
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

   <!-- form repeater js -->
   <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


   <!-- Required datatable js -->
   <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
   <!-- Datatable init js -->
   <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

   <!-- Responsive Table js -->
   <script src="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.js') }}"></script>

   <!-- Init js -->
   <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

   <!-- Table Editable plugin -->
   <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>

   <!-- Sweet Alerts js -->
   <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

   <!-- Sweet alert init js-->
   <script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

@endsection