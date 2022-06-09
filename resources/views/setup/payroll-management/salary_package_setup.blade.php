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
@slot('title') SALARY PACKAGE  @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">SALARY PACKAGES </h4>
          </div>
          <div class="col-6 text-end  mb-3">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".material-callects-modal-xl-view"><i class="fa fa-plus"></i> ADD</button>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive w-100">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Gross Salary</th>
              <th>Net Salary</th>
              <th>Currency</th>
              <th>Will Convert</th>
              <th>Pay Type</th>
              <th>Over Time Amnt</th>
              <th>Log</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Junior Programme Assistant (9-3)</td>
              <td>Junior Programme Assistant</td>
              <td>14700.0000</td>
              <td>14700.0000</td>
              <td>USD</td>
              <td>Y</td>
              <td>Monthly</td>
              <td>0.0000</td>
              <td>Create: Md. Kutubuddin..@ 2021-07-05 21:20:28
                  Update: Md. Kutubuddin..@ 2021-07-06 01:09:15</td>
              <td><button type="button"
                  class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                  data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                  <i class=" fas fa-eye"></i>
              </button>
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
</div>
<!--  Extra Large modal example -->
<div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary">Salary Package</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <!-- journal form start -->  
                    <div class="col-md-12 d-flex">
                      <div class="col-md-4 mb-3">
                          <label class="form-label">Package Name</label>
                          <input class="form-control" type="text" placeholder="Enter Head Name Here" id="example-text-input"> 
                      </div>
                      <div class="col-md-4 ms-2 mb-3">
                          <label class="form-label">Desc</label>
                          <textarea class="form-control" placeholder="Enter salary head description" rows="1" name="SHDesc" cols="50" id="SHDesc"></textarea>
                      </div>
                      <div class="col-md-4 ms-2 pe-3 mb-3">
                          <label class="form-label">Grade Name</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">Grade 1</option>
                            <option value="2">Grade 2</option>
                            <option value="3">Grade 3</option>
                            <option value="4">Grade 4</option>
                            <option value="5">Grade 5</option>
                            <option value="6">Grade 6</option>
                            <option value="7">Grade 7</option>
                            <option value="8">Grade 8</option>
                            <option value="9">Grade 9</option>
                            <option value="10">Grade 10</option>
                            <option value="11">Grade 11</option>
                            <option value="12">Grade 12</option>
                            <option value="13">Grade 13</option>
                          </select>
                      </div>
                    </div>
               
                    <div class="col-md-12 d-flex">
                      <div class="col-md-6  mb-3">
                          <label class="form-label">Step Name</label>
                          <select id="formrow-inputState" class="form-select">
                              <option value="0">Select</option>
                              <option value="1">Probation Period</option>
                              <option value="2">Entry Step</option>
                              <option value="3">Step 1</option>
                              <option value="4">Step 2</option>
                              <option value="5">Step 3</option>
                              <option value="6">Step 4</option>
                              <option value="7">Step 5</option>
                              <option value="8">Step 6</option>
                              <option value="9">Step 7</option>
                              <option value="10">Step 8</option>
                              <option value="11">Step 9</option>
                              <option value="12">Step 10</option>
                          </select>
                      </div>
                      <div class="col-md-6 ps-2 mb-3">
                          <label class="form-label">Curnc Id</label>
                          <select id="formrow-inputState" class="form-select">
                              <option value="0">Select</option>
                              <option value="1">Bangladeshi Taka</option>
                              <option value="2">USD</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-8 d-flex">
                        <div class="col-md-4 mb-2">
                            <h5 class="mb-3">Will Convert</h5>
                            <div class="">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label pe-3">Yes</label>
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">No</label>
                              </div>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h5 class="mb-4">Pay Type</h5>
                            <div class="">
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label pe-3">Hourly</label>
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label pe-3">Daily</label>
                                <input class="form-check-input" type="radio" name="formRadios">
                                <label class="form-check-label">Monthly</label>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-12 d-flex">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Over Time Amt</label>
                            <input class="form-control" type="number" placeholder="Over Time Amt Per Hours" id="example-text-input"> 
                        </div>
                        <div class="col-md-4 ms-2 pb-5 text-center">
                            <label class="form-label ">Overtime in Percent of</label> <br>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label pe-3">Yes</label>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">No</label>
                            <select id="formrow-inputState" class="form-select ">
                              <option value="0">Select</option>
                            </select>
                        </div>
                        <div class="col-md-4 ms-2 pe-3 mb-3">
                            <label class="form-label">Bonus Salary Head</label>
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
                      </div>
                      <div class="col-md-12 d-flex">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Attendance Bonus Amt</label>
                            <input class="form-control" type="number" placeholder="Enter Attendance Bonus Amt" id="example-text-input"> 
                        </div>
                        <div class="col-md-4 ms-2 pb-5 text-center">
                            <label class="form-label ">Bonus In Percent</label><br>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label pe-3">Yes</label>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">No</label>
                        </div>
                        <div class="col-md-4 ms-2 pe-3 mb-3">
                            <label class="form-label">Bonus Salary Head</label>
                            <select id="formrow-inputState" class="form-select">
                              <option value="0">Select</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-12 d-flex">
                        <div class="col-md-3 pe-2 mb-3">
                            <label class="form-label">Late Count</label>
                            <input class="form-control" type="number" placeholder="Enter Late Count In Da" id="example-text-input"> 
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Salary Deduction Days</label>
                            <input class="form-control" type="number" placeholder="Enter late sal count here" id="example-text-input"> 
                        </div>
                        <div class="col-md-3 ms-2 pe-3 mb-3">
                          <label class="form-label">Late Sal Head</label>
                          <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                                   <option value="1">Medicine</option>
                        <option value="2">Bakery assets</option>
                        <option value="3">Anklet</option>
                        <option value="4">Jewelerry Raw Materials</option>
                        <option value="5">Paperwork Raw Materials</option>
                        <option value="6">Paperwork Finished Goods</option>
                        <option value="7">Block Raw Materials</option>
                        <option value="8">Canteen Raw Material</option>
                        <option value="9">Canteen Finished Goods</option>
                        <option value="10">Tie-dye Raw Materials</option>
                        <option value="11">Bakery Raw Materials</option>
                        <option value="12">Angel Chef Hot Kitchen</option>
                          </select>
                      </div>
                        <div class="col-md-3 ms-2 pb-5">
                            <label class="form-label ">Deduct Head</label><br>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label pe-3">Basic</label>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label pe-3">Gross</label>
                            <input class="form-check-input" type="radio" name="formRadios">
                            <label class="form-check-label">Net Salary</label>
                        </div>
                      </div>
                      <div class="col-md-12 d-flex">
                        <div class="col-md-4 ms-2 pb-5">
                          <label class="form-label ">Is Auto Gross Calc</label><br>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label pe-3">Yes</label>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label pe-3">No</label>
                      </div>
                        <div class="col-md-4 pe-2 mb-3">
                            <label class="form-label">Gross Salary</label>
                            <input class="form-control" type="number" placeholder="Enter Total Gross Salary Here" id="example-text-input"> 
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Net Salary</label>
                            <input class="form-control" type="number" placeholder="Enter Total Salary Here" id="example-text-input"> 
                        </div>
                      </div>
                      <div class="col-md-12 d-flex">
                        <div class="col-md-4 ms-2 pb-5">
                          <label class="form-label ">Is Comp Facility</label><br>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label pe-3">Yes</label>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label pe-3">No</label>
                      </div>
                      <div class="col-md-4 ms-2 pe-3 mb-3">
                        <label class="form-label">Facility Package</label>
                        <select id="formrow-inputState" class="form-select">
                          <option value="0">Select</option>
                        </select>
                    </div>
                      </div>
                      <div class="col-12">
                        <h4 class="card-title">Assign Tasks</h4>
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-1 p-0 pe-4  text-center">
                                    <label for="product">SL</label>
                                </div>
                                <div class="col-2 p-0  text-center">
                                    <label for="product">Salary Head</label>
                                </div>
                                <div class="col-1 p-0  text-center">
                                    <label for="total">Pay Amount</label>
                                </div>
                                <div class="col-1 p-0 ps-3">
                                    <label for="product">Is Percent</label>
                                </div>
                                <div class="col-2 p-0 text-center ">
                                    <label for="product">Percent Field</label>
                                </div>
                                <div class="col-2 p-0 text-center">
                                    <label for="total">Basic/Provident</label>
                                </div>
                                <div class="col-2 p-0 text-center ">
                                    <label for="product">PF Company</label>
                                </div>
                                <div class="col-1 p-0 text-center">
                                    <label for="product">Total</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                <div data-repeater-item class="row">
                                    <div  class="col-1 d-flex p-0  pb-1 ps-4">
                                        <label>01</label>
                                    </div>
                                    <div class=" col-2 p-0 pe-3 pb-1">
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
                                    <div class=" col-1 p-0 pb-1">
                                      <input type="number" class="form-control "/>
                                    </div>
                                    <div class=" col-1 p-0 pb-1 ps-5">
                                      <input type="checkbox" class="form-check-input">
                                    </div>
                                    <div class=" col-2 p-0 pb-1">
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
                                    <div class=" col-2 p-0 pb-1 ps-3">
                                      <select id="formrow-inputState" class="form-select">
                                        <option value="1">Basic</option>
                                        <option value="2">Provident</option>
                                      </select>
                                    </div>
                                    <div class=" col-1 p-0 pb-1 ps-3 pe-3">
                                      <input type="number" class="form-control"/>
                                    </div>
                                    <div class="col-2 p-0 pb-1 pe-3 align-self-center d-flex">
                                        <input type="number" class="form-control"/>
                                        <button class="btn btn-outline-danger waves-effect waves-light">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                    </div>
                                </div> 
                            </div>
                           <div class="">
                            <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 me-5  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                           </div>
                        </form>
                    </div>
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
    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>

{{-- Form --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>
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