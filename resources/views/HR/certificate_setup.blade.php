@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')TASK ACTIVITIES @endslot
    @endcomponent
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="fas fa-plus-circle"></i>Add</button>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Certificates</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="col-12 d-flex">
                                            <label for="example-text-input" class="col-md-2 col-form-label text-end">Certificate Name</label>
                                            <div class="col-md-8">
                                                <input class="form-control ms-5 mt-3 mb-3" type="text" placeholder="Enter Certificate Name Here" id="example-text-input">
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="p-0 mb-2">
                                        <div class="col-12 d-flex">
                                            <label for="example-text-input" class="col-md-2 col-form-label text-end" >Type</label>
                                            <div class="col-md-8 ms-5">
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                                    <label class="btn btn-outline-success" for="btnradio4">Academic</label>
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                                    <label class="btn btn-outline-danger" for="btnradio5">Training</label>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="p-0">
                                        <div class="col-12 d-flex">
                                            <label for="example-text-input" class="col-md-2 col-form-label text-end mt-3 mb-3">Note</label>
                                            <div class="col-md-8">
                                                <input class="form-control ms-5" type="text" placeholder="EnterCertificate Note Here" id="example-text-input">
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="row modal-footer">
                                        <div class="col-md-1">
                                            <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-success w-100">Save</button>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th class="col-3 bold">Name</th>
                                <th class="col-5 bold">Type</th>
                                <th class="col-2 text-center">Note</th>
                                <th class="col-2 text-center">Log</th>
                                <th class="col-2 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alim</td>
                                <td>Academic</td>
                                <td>Post Graduation</td>
                                <td>Create: Karishma Cultural @ 2018-12-27 19:24:14</td>
                                <td><button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" ">
                                         <i class="fas fa-check"></i>
                                    </button>
                                   
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" ">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                            class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            <tr>
                                <td>B.COM (Bachelor of Commerce)</td>
                                <td>Academic</td>
                                <td>Graduation</td>
                                <td>Create: Karishma Cultural @ 2018-12-27 19:20:17</td>
                                <td><button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" >
                                         <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" id="sa-success">
                                        <i class="fas fa-pen">
                                    </i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i class="fas fa-trash-alt"></i>
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
 <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary">Certificates Details
                        </h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                        <div class="table-responsive">
                            <table class="table table-bordered border-success mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Cert Name</th>
                                        <td>MBS (Masters Of Business Studies)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cert Type</th>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cert Note</th>
                                        <td>Post Graduation</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Is Active</th>
                                        <td>Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row modal-footer">
                            <div class="col-md-1">
                                <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
        </div> <!-- journal form end -->
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
<script>
 
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

 
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>

<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
