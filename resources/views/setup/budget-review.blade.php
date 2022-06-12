@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<style>
  .over {
      overflow:auto;
      width: 4000px;
  }
  .wid{
    width: 3950px;
  }
</style>
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
@slot('title')ACCOUNTING > BUDGET REVIEW @endslot
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
                          <span class="d-none d-sm-block">Budget Review Setup</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Budget Review List</span>
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
                                                              <div class="col-3 p-0 d-flex align-items-center">
                                                                <h6>Project</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                  <select class="form-control select2">
                                                                     <option value="">--select--</option>
                                                                     <option value="1">Governing Office</option>
                                                                     <option value="2">Operations</option>
                                                                     <option value="3">Administration</option>
                                                                     <option value="4">Finance and Accounts Section</option>
                                                                     <option value="5"> Accounts Receivable </option>
                                                                     <option value="6">Procurement Section</option>
                                                                     <option value="7">Inventory Management</option>
                                                                     <option value="8"> Accrued Commissions </option>
                                                                     <option value="9">ICT Section</option>
                                                                     <option value="10">Programme</option>
                                                                  </select>
                                                               </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                              <div class="col-3 p-0 d-flex align-items-center">
                                                                <h6>Start Date</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <div class="input-group" id="datepicker1">
                                                                    <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                        data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                               </div>
                                                              </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                           <div class="row mb-4">
                                                              <div class="col-2 p-0 d-flex align-items-center">
                                                                <h6>Name</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <input class="form-control" type="text"   placeholder="Enter budget name here" id="example-number-input">
                                                               </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                              <div class="col-2 p-0 d-flex align-items-center">
                                                                <h6>End Date</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <div class="input-group" id="datepicker1">
                                                                    <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                        data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                             </div>
                                             <div class="row">
                                              <div class="col-lg-5">
                                                  <div class="mb-3 mt-4 d-flex justify-content-end">
                                                      <div><h5>Requested Amount</h5></div>
                                                      <div><span id="totlRqstdAmnt" class="purchaseInfo ms-2 border p-1">NaN</span></div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-5">
                                                  <div class="mb-3 mt-4 d-flex justify-content-end">
                                                      <div><h5>Reviewed Amount</h5></div>
                                                      <div><span id="totlRqstdAmnt" class="purchaseInfo ms-2 border p-1">1</span></div>
                                                  </div>
                                              </div>
                                           </div>
                                           <table  class="table table-bordered mt-5 p-0 dt-responsive w-100">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Budget Head</th>
                                                    <th>Account</th>
                                                    <th>Approved Amount</th>
                                                    <th>Expense Amount</th>
                                                    <th>Reserve Amount</th>
                                                    <th>Remaining Amount</th>
                                                    <th>Reviewed Amount</th>
                                                    <th>Note</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="p-0"><input type="number" class="form-control border-0"></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="p-0"><input type="number" class="form-control border-0"></td>
                                                  <td></td>
                                                </tr>

                                            </tbody>
                                          </table>
                                         <div class="row">
                                            <div class="col-lg-8">
                                                <div class="mb-3 mt-4 ">
                                                    <div class="row">
                                                        <div class="col-4 p-0 d-flex align-items-center justify-content-center">
                                                            <div class="mt-2"><h5>Note</h5></div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div><input type="text" class="form-control" placeholder="Enter note is any"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mt-4 ">
                                                    <div class="row">
                                                        <div class="col-6 p-0 d-flex align-items-end justify-content-center">
                                                            <div class="mt-2"><h5>Is Active</h5></div>
                                                        </div>
                                                        <div class="col-6 form-check-danger mt-2">
                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                             <div class="row d-flex justify-content-end mt-4">
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

                    <table id="datatable" class="table table-bordered dt-responsive w-100 ">
                      <thead>
                          <tr>
                              <th>Project</th>
                              <th>Budget Name</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Requested Amount</th>
                              <th>Approved Amount</th>
                              <th>Status</th>
                              <th class="">Is sent for approval</th>
                              <th>Note</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Programme</td>
                              <td>Program Budget (2021-2022)</td>
                              <td> </td>
                              <td></td>
                              <td>	1304012.00</td>
                              <td>	1304012.00</td>
                              <td>A</td>
                              <td>N</td>
                              <td></td>
                              <td>Create: Ohidul Hassan @ 2021-07-14 05:11:42
                                Update: Sajida Rahman @ 2021-07-14 11:57:19</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-dark btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-dark btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="fas fa-eye"></i>
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
   <script src="{{ asset('assets/libs/table-edits/table-edits.min.js') }}"></script>
   <script src="{{ asset('assets/js/pages/table-editable.int.js') }}"></script>
@endsection
