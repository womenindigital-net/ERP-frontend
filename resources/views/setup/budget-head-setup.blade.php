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
@slot('title')ACCOUNTING > BUDGET HEAD @endslot
@endcomponent

<div class="row">
  <div class="col-xl-12">
      <div class="card">
          <div class="card-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                          <span class="d-none d-sm-block">BudgetHead Setup</span>    
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">BudgetHead List</span>    
                      </a>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel "> 
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card ms-0">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted mt-4">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                             <div class="row">
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Title</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                  <select class="form-control select2">
                                                                     <option value="">--select--</option>
                                                                     <option value="1"> 10 Stations </option>
                                                                     <option value="2"> 1st January New Year event </option>
                                                                     <option value="3"> Accounting /Tally/ Audit/Legal expenses </option>
                                                                     <option value="4"> Accounting /Tally/ Audit/Legal expenses </option>
                                                                     <option value="5"> Accounts Receivable </option>
                                                                     <option value="6"> Accounts Staff Salary </option>
                                                                     <option value="7"> Accrued accounts payable </option>
                                                                     <option value="8"> Accrued Commissions </option>
                                                                     <option value="9"> Accrued Compensation </option>
                                                                     <option value="10"> Accrued expenses </option>
                                                                     <option value="11"> Accrued Income </option>
                                                                     <option value="12"> Accrued Interest </option>
                                                                     <option value="13"> Accrued paid leave </option>  
                                                                  </select> 
                                                               </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Parent</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <select class="form-control select2"> 
                                                                    <option value="0">Top</option>
                                                                    <option value="1">Direct Programme Expenses</option>
                                                                    <option value="2">Direct labour cost</option>
                                                                    <option value="3">Training/Workshop/Seminar</option>
                                                                    <option value="4">Training venue rental</option>
                                                                    <option value="5">Training equipment rental</option>
                                                                    <option value="6">Marketing, sates and distribution expenses</option>
                                                                    <option value="7">Online Promotional Exp.</option>
                                                                    <option value="8">Program Videos</option>
                                                                    <option value="9">Sheltered Emplyment Expenses</option>
                                                                    <option value="10">Annual Program Expenses</option>
                                                                    <option value="11">2nd April programme</option>
                                                                    <option value="12">15 October Anniversary Programme</option>
                                                                    <option value="13">Students Training Materials</option>
                                                                    <option value="14">Jewelry raw materials</option>
                                                                    <option value="15">Tailoring raw materials</option>
                                                                    <option value="16">Programme related other expenses</option>
                                                                    <option value="17">Home Visit expenses</option>
                                                                    <option value="18">Monthly Birthday Celebration</option>
                                                                    <option value="19">Travel expenses</option>
                                                                    <option value="20">Professional Fees</option>
                                                                    <option value="21">Payroll Expenses</option>
                                                                    <option value="22">General Administrative Expenses</option>
                                                                    <option value="23">Income Tax expenses</option>
                                                                    <option value="24">Accounts Receivable</option>
                                                                    <option value="25">Grants receivables</option>
                                                                    <option value="26">Donations - Dhaka Bank</option>
                                                                    <option value="27">Donations - Confidence Group</option>
                                                                    <option value="28">Student Receivable</option>
                                                                    <option value="29">Contracts</option>
                                                                    <option value="30">Property, Plant  Equipment</option>
                                                                    <option value="31">Training Educational Equipment</option>
                                                                    <option value="32">Investments</option>
                                                                    <option value="33">Savings  Short-Term Investments</option>
                                                                    <option value="34">Other non-Current Assets</option>
                                                                    <option value="35">Intellectual Property</option>
                                                                    <option value="36">Revenue from Jewelry Items</option>
                                                                    <option value="37">Beads necklace</option>
                                                               </select> 
                                                               </div>
                                                              </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Indent</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <input class="form-control" type="number" id="example-number-input">
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Description</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <textarea id="textarea" class="form-control"rows="2"
                                                                placeholder="Enter description here"></textarea>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                             </div>
                                             <div class="row d-flex justify-content-end mt-3">
                                              <div class="col-2">
                                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                                  <button class="btn btn-success w-100">Save</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">
                    <table id="datatable" class="table table-bordered dt-responsive w-100">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Direct Programme Expenses</td>
                              <td></td>
                              <td>Create: Ohidul Hassan @ 2021-01-02 15:00:18
                                There is no update record.
                                </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-dark btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-dark btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="fas fa-trash-alt"></i>
                                </button>
                              </td>
                          </tr>
                          <tr>
                              <td>Direct Programme Expenses</td>
                              <td></td>
                              <td>Create: Ohidul Hassan @ 2021-01-02 15:00:18
                                There is no update record.
                                </td>
                              <td>
                                      <button type="button" class="btn btn-sm btn-dark btn-rounded waves-effect waves-light mb-2 me-1">
                                          <i class="mdi mdi-pencil"></i>
                                      </button>
                                      <button type="button" class="btn btn-sm btn-dark btn-rounded waves-effect waves-light mb-2 me-1">
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
</div>
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