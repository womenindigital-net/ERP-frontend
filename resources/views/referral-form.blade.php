@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
  type="text/css" />
<link href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') Case History @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg">ADD</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
          <thead>
            <tr>
              <th>Collection Date</th>
              <th>Student Name</th>
              <th>Collected By</th>
              <th>Log</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2022-03-29</td>
              <td>Ashfaq Sadi</td>
              <td>Nurjahan Dipa</td>
              <td>
                <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span>
                <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
              </td>
              <td>
                <button type="button" class="btn btn-lg p-1 btn-primary btn-rounded waves-effect waves-light">
                  <i class="mdi mdi-trash-can-outline font-size-32 align-middle"></i></button>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->

<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Case History</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy"
                        data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                      <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                    </div><!-- input-group -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <select class="form-control select2-search-disable">
                      <option>Select</option>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <select class="form-control select2-search-disable">
                      <option>Select</option>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Description:</label>
                    <p>Referral form : diet, psychology, doctor, counseling,</p>
                  </div>
                  <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Instruction:</label>
                    <p>This form should be used for all contacts with Doctor in times of illness or emergency. The completed form should be kept with the client's records and made available only to those who need the Information :</p>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3>Requested Information From a Doctor</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-12">
                    <label>Organisation</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Client's Name and Address</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Doctor /Practice or Pharmacist/Pharmacy contacted</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Name of Doctor /Pharmacist</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Telephone/Fax/Email/Letter</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Date of Request</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Information requested</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Response given</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Name of person making request</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Position</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Signature of person making the request</label>
                    <div class="input-group" id="datepicker2">
                        <input type="file" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Date</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Signature of manager</label>
                    <div class="input-group" id="datepicker2">
                        <input type="file" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label></label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label>Date</label>
                    <div class="input-group" id="datepicker2">
                        <input type="text" class="form-control">
                    </div>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
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

@endsection