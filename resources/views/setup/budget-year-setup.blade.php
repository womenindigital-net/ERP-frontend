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
@slot('title')ACCOUNTING > BUDGET YEAR @endslot
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
                          <span class="d-none d-sm-block">Budget Year Setup</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Budget Year List</span>
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
                                                                <h6>Budget Year</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                 <div class="input-group" id="datepicker4">
                                                                  <input type="text" class="form-control" data-date-container='#datepicker4' data-provide="datepicker"
                                                                  data-date-format="MM yyyy" data-date-min-view-mode="1">
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
                              <th>Budget Year</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>2022</td>
                              <td>Create: Ohidul Hassan @ 2021-01-02 15:00:18
                                There is no update record.
                                </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="fas fa-trash-alt"></i>
                              </button>
                              </td>
                          </tr>
                          <tr>
                              <td>2022</td>
                              <td>Create: Ohidul Hassan @ 2021-01-02 15:00:18
                                There is no update record.
                                </td>
                              <td>
                                      <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
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
@endsection
