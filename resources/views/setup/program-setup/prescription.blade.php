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
@slot('title') MEDICINE ADMINS @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">MEDICINE ADMINS</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg">ADD</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive  w-100">
          <thead>
            <tr class="table-primary">
              <th>Student Name</th>
              <th>Prescription Name</th>
              <th>Prescribe By</th>
              <th>Log</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Md. Moinul Islam Supta</td>
              <td>Roger Oliver</td>
              <td>Shonod Shonod</td>
              <td>
                <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span>
                <br/>
                <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                  <i class="mdi mdi-eye"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="mdi mdi-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="bx bx-dollar"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-arrow-circle-right"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                  <i class="fas fa-trash-alt"></i>
                  </button>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->


<!--  Large modal example -->
<div class="modal fade bs-example-modal55-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Add Medicine Admin Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
          <!-- Seller Details -->
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                      <label for="basicpill-lastname-input">Prescription Name:</label>
                      <x-input-text name="hello1" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                      <label for="basicpill-lastname-input">Prescribe By:</label>
                      <x-input-text name="hello1" placeholder="">
                      </x-input-text>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2 class=" text-center mb-4">Raw Material Lists</h2>
                <form class="repeater" enctype="multipart/form-data">
                    <div data-repeater-list="group-a">
                        <div data-repeater-item class="row">
                            <div class="mb-3 col-lg-2">
                                <label for="name">Name</label>
                                <x-input-text name="hello1" placeholder="">
                                </x-input-text>
                            </div>

                            <div class="mb-3 col-lg-2">
                                <label for="email">Email</label>
                                <x-input-text name="hello1" placeholder="">
                                </x-input-text>
                            </div>

                            <div class="mb-3 col-lg-2">
                                <label for="subject">Subject</label>
                                <x-input-text name="hello1" placeholder="">
                                </x-input-text>
                            </div>

                            <div class="mb-3 col-lg-2">
                                <label for="resume">Resume</label>
                                <x-input-text name="hello1" placeholder="">
                                </x-input-text>
                            </div>

                            <div class="mb-3 col-lg-2">
                                <label for="message">Message</label>
                                <x-input-textarea name="hello1" placeholder="">
                                </x-input-textarea>
                            </div>

                            <div class="col-lg-2 align-self-center">
                                <div class="d-grid">
                                    <input data-repeater-delete type="button" class="btn btn-primary" value="Delete" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                </form>
                  </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    
                  </div>
                </div>
              </div>
            </form>
          </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!--  Edit Journal -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary">Add Medicine Admin Create</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->
                      <div class="row">
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label for="basicpill-lastname-input">Student:</label>
                              <select class="form-control form-control">
                                <option>--Select--</option>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                              <div class="mb-3">
                                <label for="basicpill-lastname-input">Prescription Name:</label>
                                <x-input-text name="hello1" placeholder="">
                                </x-input-text>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="mb-3">
                                <label for="basicpill-lastname-input">Prescribe By:</label>
                                <x-input-text name="hello1" placeholder="">
                                </x-input-text>
                              </div>
                          </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-12 p-0">
                              <div class="card">
                                  <div class="card-body">
                                      <h2 class=" text-center mb-4">Posting Transaction Details</h2>
                                      <form class="repeater" enctype="multipart/form-data">
                                          <div class="row">
                                              <div class="col-lg-4 p-0 ps-2 pe-1">
                                                <label for="name">Medicine Name	</label>
                                              </div>
                                              <div class="col-lg-4 p-0 pe-1">
                                                  <label for="product">Medicine Dose</label>
                                              </div>
                                              <div class="col-lg-4 p-0 pe-1">
                                                  <label for="product">Medicine Route</label>
                                              </div>
                                          </div>
                                          <div data-repeater-list="group-a">
                                              <div data-repeater-item class="row">
                                                  <div class="col-lg-4 p-0 pe-1 ps-2 pb-1 ">
                                                    <x-input-text name="hello1" placeholder="">
                                                    </x-input-text>
                                                  </div>
                                                  <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                    <x-input-text name="hello1" class="form-control" placeholder="">
                                                    </x-input-text>
                                                  </div>
                                                  <div class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                                    <x-input-text name="hello1" placeholder="">
                                                    </x-input-text>
                                                    <button class="btn btn-danger btn-rounded me-3 ms-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                  </div>
                                              </div>
                                              
                                          </div>
                                          <button data-repeater-create type="button" class="btn btn-success font-size-16 waves-effect waves-light"> Add</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <!-- journal form end -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                  <button type="button" class="btn font-size-16 btn-success" id="sa-position"><i class="bx bx-save"></i> Save</button>
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