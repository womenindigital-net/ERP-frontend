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
@slot('title') Student Qa @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end mb-3">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
            data-bs-target=""><i class="fa fa-user"></i> Profile</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-xl"><i class="fa fa-plus"></i> ADD</button>
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
              <td>2022-05-15</td>
              <td>Abdur Rahman Sajid</td>
              <td>Ohidul Hassan</td>
              <td>Create: Ohidul Hassan @ 2022-05-15 17:25:12
              </td>
              <td>
              <button type="button"
                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
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

 <!--  Large modal example -->
 <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p>Cras mattis consectetur purus sit amet fermentum.
                  Cras justo odio, dapibus ac facilisis in,
                  egestas eget quam. Morbi leo risus, porta ac
                  consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque
                  nisl consectetur et. Vivamus sagittis lacus vel
                  augue laoreet rutrum faucibus dolor auctor.</p>
              <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                  Praesent commodo cursus magna, vel scelerisque
                  nisl consectetur et. Donec sed odio dui. Donec
                  ullamcorper nulla non metus auctor
                  fringilla.</p>
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