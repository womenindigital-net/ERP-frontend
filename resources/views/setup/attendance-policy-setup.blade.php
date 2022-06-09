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
@slot('title')HRMS > ATTDN POLICY @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">ATTDN POLICIES</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
                class="fas fa-plus-circle"></i> Add</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive w-100">
          <thead>
            <tr>
              <th>Policy Name </th>
              <th>Log</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bakery_Policy</td>
              <td>Create: Shonod Digital @ 2019-01-19 23:22:09
                Update: Ohidul Hassan @ 2022-05-15 12:53:40</td>
              <td class="text-center">

                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                </button>
                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"><i class="mdi mdi-pencil"></i>
                </button>
                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"><i class="fas fa-trash-alt"></i>
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
                  <h5 class="modal-title text-primary">Attdn Policy</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->
                  <!-- journal form start -->
                  <div class="row">
                      <div class="col-md-4">
                          <div class="mb-3">
                              <label class="form-label">Policy Name</label>
                              <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Policy Name here.. ">
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label">Over Time Start Grace</label>
                          <input type="number" class="form-control" id="horizontal-firstname-input" placeholder="Enter time in minute ">
                      </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label">Arrival Grace</label>
                          <input id="timepicker3" type="number" placeholder="Enter arrival grace in minute" class="form-control" data-provide="timepicker">
                      </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                          <label class="form-label">Lunch Break:</label>
                          <input type="number" class="form-control" id="horizontal-firstname-input" placeholder="Lunch Break in minute ">
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Lunch Time</label>
                        <div class="input-group" id="timepicker-input-group3">
                            <input id="timepicker3" type="text" class="form-control"
                                data-provide="timepicker">
                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Working Hour </label>
                        <input type="number" class="form-control" id="horizontal-firstname-input" placeholder="Enter working hour ">
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                      <div class="mb-3">
                        <div>
                          <label class="form-label">Sun In</label>
                          <div class="input-group" id="timepicker-input-group3">
                              <input id="timepicker3" type="text" class="form-control"
                                  data-provide="timepicker">
                              <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Sun Out</label>
                        <div class="input-group" id="timepicker-input-group3">
                            <input id="timepicker3" type="text" class="form-control"
                                data-provide="timepicker">
                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                        </div>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Is Next Day</label>
                      <div class="square-switch">
                        <input type="checkbox" id="square-switch3" switch="bool"  checked />
                        <label for="square-switch3" data-on-label="Yes"
                            data-off-label="No"></label>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                      <div>
                        <label class="form-label">Mon In</label>
                        <div class="input-group" id="timepicker-input-group3">
                            <input id="timepicker3" type="text" class="form-control"
                                data-provide="timepicker">
                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">Mon Out</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label mt-3"></label>
                    <div class="square-switch">
                      <input type="checkbox" id="square-switch4" switch="bool" checked />
                      <label for="square-switch4" data-on-label="Yes"
                          data-off-label="No"></label>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                  <div class="mb-3">
                    <div>
                      <label class="form-label">Thu In</label>
                      <div class="input-group" id="timepicker-input-group3">
                          <input id="timepicker3" type="text" class="form-control"
                              data-provide="timepicker">
                          <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label">Thu Out</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label mt-3"></label>
                    <div class="square-switch">
                      <input type="checkbox" id="square-switch5" switch="bool" checked />
                      <label for="square-switch5" data-on-label="Yes"
                          data-off-label="No"></label>
                    </div>
              </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                  <div>
                    <label class="form-label">Wed in</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Wed Out</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label mt-3"></label>
                    <div class="square-switch">
                      <input type="checkbox" id="square-switch6" switch="bool" checked />
                      <label for="square-switch6" data-on-label="Yes"
                          data-off-label="No"></label>
                    </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                  <div>
                    <label class="form-label">Thu In</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker8" type="text" class="form-control"
                            data-provide="timepicker8">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Thu Out</label>
                  <div class="input-group" id="timepicker-input-group3">
                      <input id="timepicker3" type="text" class="form-control"
                          data-provide="timepicker">
                      <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                  </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label mt-3"></label>
                  <div class="square-switch">
                    <input type="checkbox" id="square-switch9" switch="bool" checked />
                    <label for="square-switch9" data-on-label="Yes"
                        data-off-label="No"></label>
                  </div>
            </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                  <div>
                    <label class="form-label">Fri In</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Fri out</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label mt-3"></label>
                  <div class="square-switch">
                    <input type="checkbox" id="square-switch11" switch="bool" checked  />
                    <label for="square-switch11" data-on-label="Yes"
                        data-off-label="No"></label>
                  </div>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                  <div>
                    <label class="form-label">Sat In</label>
                    <div class="input-group" id="timepicker-input-group3">
                        <input id="timepicker3" type="text" class="form-control"
                            data-provide="timepicker">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                  <label class="form-label">Sat Out</label>
                      <div class="input-group" id="timepicker-input-group3">
                          <input id="timepicker3" type="text" class="form-control"
                              data-provide="timepicker">
                          <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                      </div>
               </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label mt-3"></label>
                  <div class="square-switch">
                    <input type="checkbox" id="square-switch12" switch="bool" checked />
                    <label for="square-switch12" data-on-label="Yes"
                        data-off-label="No"></label>
                  </div>
            </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <div class="mb-3">
                  <label class="form-label">Deduct Leave for</label>
                  <div class="square-switch">
                    <input type="checkbox" id="square-switch10" switch="bool" checked />
                    <label for="square-switch10" data-on-label="Yes"
                        data-off-label="No"></label>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Deduct in minute</label>
              <input type="number" class="form-control" id="horizontal-firstname-input" placeholder="Enter Deduct in minute ">
          </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-10">
            <div class="mb-3">
              <label class="form-label">Policy Desc</label>
              <div>
                  <textarea placeholder="Enter policy Desc here" required class="form-control" rows="1"></textarea>
              </div>
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