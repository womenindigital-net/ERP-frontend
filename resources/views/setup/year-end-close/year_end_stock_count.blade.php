@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
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
@slot('li_1') Dashboard @endslot
@slot('title') STOCK COUNT ADJUST @endslot
@endcomponent
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Stock Count Adjustment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Stock Count List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <p class="mb-0">
                      <div class="col-xl-10">
                          <div class="card">
                              <div class="card-body p-0">
                                  <form>
                                    <div class="row pt-3">
                                        <div class="col-8">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label ">Warehouse</label>
                                                <div class="col-md-6">
                                                    <select class="form-select">
                                                        <option value="0">Select</option>
                                                        <option value="1">Canteen Logistic Materials</option>
                                                        <option value="2">Canteen Raw material</option>
                                                        <option value="3">Office Outlet</option>
                                                        <option value="4">Office Programme</option>
                                                        <option value="5">Office Store</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" id="horizontal-firstname-input" placeholder="dd/mm/yyyy ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </form>
                                <div class="col-12">
                                    <h4 class="card-title">Assign Tasks</h4>
                                    <form class="repeater" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-2 p-0 ps-4">
                                                <label for="product">SL</label>
                                            </div>
                                            <div class="col-2 p-0">
                                                <label for="product">Salary Head</label>
                                            </div>
                                            <div class="col-3 p-0 text-center">
                                                <label for="total">Pay Amount</label>
                                            </div>
                                            <div class="col-2 p-0  text-center">
                                                <label for="product">Percent Field</label>
                                            </div>
                                            <div class="col-3 p-0 text-center">
                                                <label for="total">Basic/Provident</label>
                                            </div>
                                        </div>
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div  class="col-1 d-flex p-0 ps-4 pb-1">
                                                    <label>01</label>
                                                </div>
                                                <div class=" col-3 p-0 pb-1">
                                                  <select id="formrow-inputState" class="form-select">
                                                    <option value="0">Select</option>
                                                    <option value="1">Basic</option>
                                                    <option value="2">Gross Salary</option>
                                                    <option value="3">Late Deduction Salary</option>
                                                    <option value="4">House Rent</option>
                                                    <option value="5">Medical Allowance</option>
                                                    <option value="6">Advance</option>
                                                    <option value="7">Fooding</option>
                                                    <option value="8">Transport</option>
                                                    <option value="9">AIT</option>
                                                    <option value="10">PF</option>
                                                    <option value="11">Overtime</option>
                                                    <option value="12">Arrear</option>
                                                    <option value="13">Absent</option>
                                                  </select>
                                                </div>
                                                <div class=" col-3 p-0 pb-1">
                                                  <select id="formrow-inputState" class="form-select">
                                                    <option value="0">Select</option>
                                                  </select>
                                                </div>
                                                <div class=" col-2 p-0 pb-1">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                                <div class="col-3 p-0 pb-1 align-self-center d-flex">
                                                    <input type="number" class="form-control"/>
                                                    <button class="btn btn-outline-danger waves-effect waves-light">
                                                      <i class="fas fa-trash-alt"></i>
                                                  </button>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="">
                                        <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 me-5 mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                                       </div>
                                    </form>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="row mb-2">
                                                <label for="horizontal-firstname-input" class="col-3 text-end col-form-label">Note</label>
                                                <div class="col-9">
                                                <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Note ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Reset</button>
                                    </div>
                                </div>
                              </div>
                              <!-- end card body -->
                          </div>
                          <!-- end card -->
                      </div>
                  </p>
              </div>
            <div class="tab-pane" id="profile" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Warehouse</th>
                                            <th>Count Date</th>
                                            <th>Counted By</th>
                                            <th>Note</th>
                                            <th>Is Approved</th>
                                            <th>Log</th>
                                        </tr>
                                      </thead>
                                    <tbody>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td>No data available in table</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                 </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
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

    {{-- Table --}}

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
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
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
