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
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') SALARY HEAD  @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title"> SALARY HEADS </h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
                class="fas fa-plus-circle"></i> Add</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
          <thead>
            <tr>
              <th class="text-center">Name</th>
              <th class="text-center">Bangla Name</th>
              <th class="text-center">Head Nature</th>
              <th class="text-center">Is Other Payment</th>
              <th class="text-center">Log</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">Basic</td>
              <td class="text-center">বেসিক</td>
              <td class="text-center">Additive</td>
              <td class="text-center">No</td>
              <td class="text-center">Create: Shonod Digital @ 2018-12-26 15:49:16 <br>
                Update: Shonod Digital @ 2020-02-07 03:40:53</td>
              <td class="text-center">
                <button type="button"
                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                 <i class="fas fa-check"></i>
            </button>
            <button type="button"
                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                 <i class="fas fa-check"></i>
            </button>
                  <button type="button"
                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                <i class="fas fa-pen"></i></button>
                  <button type="button"
                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                    class="fas fa-trash-alt"></i></button></td>
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
                  <h5 class="modal-title text-primary">Add Salary Step</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <!-- journal form start -->  
                    <div class="col-md-12 d-flex">
                      <div class="col-md-6 mb-3 text-center">
                          <label class="form-label">Head Name</label>
                          <input class="form-control" type="text" placeholder="Enter Head Name Here" id="example-text-input"> 
                      </div>
                      <div class="col-md-6 ms-2 mb-3 text-center">
                          <label class="form-label">Head Name Bangla</label>
                          <input class="form-control" type="text" placeholder="Enter Head Name Bangla Here" id="example-text-input"> 
                      </div>
                    </div>
                </div>
                    <div class="col-md-12 d-flex ps-3">
                      <div class="col-md-6 mb-3 text-center">
                          <label class="form-label">Default Amount</label>
                          <input class="form-control" type="number" placeholder="Enter Default Amount Here" id="example-text-input"> 
                      </div>
                      <div class="col-md-6 ps-2 pe-3 mb-3 text-center">
                          <label class="form-label">Account</label>
                          <select id="formrow-inputState" class="form-select">
                              <option value="0">Select</option>
                              <option value="1">1000 :: Current Assets</option>
                              <option value="2">1010 :: Cash Operating Account</option>
                              <option value="3">1020 :: Cash Debitors</option>
                              <option value="4">1030 :: Petty Cash</option>
                              <option value="5">1050 :: Cash in Bank</option>
                              <option value="6">1050001 :: Bank - Brac Bank (A/c # 1555204025093001)</option>
                              <option value="7">1050002 :: Bank - Mutual Trust Bank</option>
                              <option value="8">1050003 :: Bank - SCB (01-1308636-01)</option>
                              <option value="9">1050004 :: Bank-The City Bank Ltd (3101829023001)</option>
                              <option value="10">1050005 :: Bank - FSIB Ltd. (010311100012296)</option>
                              <option value="11">1080 :: Savings &amp; Short-Term Investments</option>
                              <option value="12">1080001 :: FDR - MTBL</option>
                              <option value="13">1200 :: Accounts Receivable</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="col-md-6 mb-3 text-center">
                            <h5 class="mb-4">Head Nature</h5>
                            <div class="">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label pe-3 text-center">Additive</label>
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Deductive</label>
                              </div>
                        </div>
                        <div class="col-md-6 mb-3 text-center">
                            <h5 class="mb-4">Is Other Payment</h5>
                            <div class="">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label pe-3 text-center">Other Payment</label>
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Salary head</label>
                              </div>
                        </div>
                      </div>
                    <div class="col-md-12 pe-3 ps-3 mb-3 text-center">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Enter salary head description" rows="1" name="SHDesc" cols="50" id="SHDesc"></textarea>
                    </div>
                    
                <!-- journal form end -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
            </div>
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
    <!-- Responsive Table js -->
    <script src="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.js') }}"></script>

    <!-- Init js -->
    <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#formCheckBoxForm").hide();
        $("#formCheckBoxForm2").hide();

        $("#formCheckBox").click(function(){
            $("#formCheckBoxForm").toggle();
        });
        $("#formCheckBox2").click(function(){
            $("#formCheckBoxForm2").toggle();
        });
    });
 </script>
@endsection