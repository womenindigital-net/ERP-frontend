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
@slot('title')ACCOUNTING > PROJECT WISE BUDGET SETUP @endslot
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
                          <span class="d-none d-sm-block">Budget Template Setup</span>    
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Budget Template List</span>    
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
                                                              <div class="col-2 d-flex align-items-center">
                                                                <h6>Project</h6>
                                                              </div>
                                                               <div class="col-8">
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
                                                              <div class="col-2 d-flex align-items-center">
                                                                <h6>Title</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <input class="form-control" type="text"   placeholder="Enter tittle here" id="example-number-input">
                                                               </div>
                                                              </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div> 
                                             </div>
                                             <div class="row">
                                              <div class="col-12 p-0">
                                                  <div class="card">
                                                      <div class="card-body">
                                                          <h4 class="card-title mb-4">All products</h4>
                                                          <form class="repeater" enctype="multipart/form-data">
                                                              <div class="row">
                                                                  <div class="col-lg-4 p-0 pe-1">
                                                                      <label for="name">SL</label>
                                                                      <label for="name">Budget Head</label>
                                                                  </div>
                                                                  <div class="col-lg-4 p-0 pe-1">
                                                                      <label for="product">Account</label>
                                                                  </div>
                                                                  <div class="col-lg-4 p-0 pe-1">
                                                                      <label for="product">Note</label>
                                                                  </div>
                                                              </div>
                                                              <div data-repeater-list="group-a">
                                                                  <div data-repeater-item class="row">
              
                                                                      <div  class="col-lg-4 d-flex p-0 pe-1 pb-1">
                                                                          <span class="pe-2 pb-1">01</span>
                                                                          <select id="formrow-inputState" class="form-select">
                                                                              <option value="">--Select--</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                              <option value="1">Canteen Raw Material</option>
                                                                          </select>
                                                                      </div>
                                                                      <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                                          <select id="formrow-inputState" class="form-select">
                                                                              <option selected="">--Select--</option>
                                                                              <option value="1">Garbage Poly::1031</option>
                                                                              <option value="1">Hand Wash::1027</option>
                                                                              <option value="3">Napkin Tissue::1025</option>
                                                                              <option value="4">Savlon::1028</option>
                                                                              <option value="5">Vim Botal::1024</option>
                                                                          </select>
                                                                      </div> 
                                                                      <div class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                        <input type="text" class="form-control" >
                                                                        <button class="btn btn-danger ms-2">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </div>                  
                                                                  </div>
                                                                  
                                                              </div>
                                                              <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                          </form>
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
                              <th>Project</th>
                              <th>Title</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Jewelry Section</td>
                              <td>Jewelary budget 2021</td>
                              <td>Create: Ohidul Hassan @ 2021-01-02 13:57:40
                                Update: Ohidul Hassan @ 2021-01-02 19:15:01 </td>
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
                              <td>Jewelry Section</td>
                              <td>Jewelary budget 2021</td>
                              <td>Create: Ohidul Hassan @ 2021-01-02 13:57:40
                                Update: Ohidul Hassan @ 2021-01-02 19:15:01 </td>
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