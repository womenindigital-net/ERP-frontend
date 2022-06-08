@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') ACADEMIC CALENDAR @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".text-add-or-edit">Add</button>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive noweap w-100">
                        <thead>
                            <tr>
                                <th class="col-3">Event Name</th>
                                <th class="col-5">Event Type</th>
                                <th class="col-2">Start Date</th>
                                <th class="col-2">End Date</th>
                                <th class="col-2">Label</th>
                                <th class="col-2">Duration</th>
                                <th class="col-2">Log</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Appointment with PFDA</td>
                                <td>Academic Calendar</td>
                                <td>21-11-2018</td>
                                <td>21-11-2018</td>
                                <td>Out Of Office</td>
                                <td>24</td>
                                <td>
                                    <small>Create: Nusrat Jahan @  2019-06-09 22:22:54
                                    There is no update record.</small>
                                </td>
                                <td>
                                    <button type="button" tesk-view class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".tesk-view">
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
                            <tr>
                                <td>Appointment with PFDA</td>
                                <td>Academic Calendar</td>
                                <td>21-11-2018</td>
                                <td>21-11-2018</td>
                                <td>Out Of Office</td>
                                <td>24</td>
                                <td><small>Create: Nusrat Jahan @  2019-06-09 22:22:54
                                    There is no update record.</small></td>
                                <td style="width: 150px">
                                    <button type="button" tesk-view class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".tesk-view">
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

<!-- Add And Edit -->
<div class="modal fade text-add-or-edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel"> Add and Edit and view Academic Calendar Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6 mb-3">
                                <label class="form-label">Event Name</label>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Event Type</label>
                                <select class="form-select">
                                    <option>--Select--</option>
                                    <option>Academic Calendar</option>
                                    <option>Personal</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Area</label>
                                
                            </div>
                            <div class="col-6 row mb-3">
                                <label class="col-4 col-form-label">Activity</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>General Play</option>
                                        <option>Organized Play</option>
                                        <option>Balance Beam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 row mb-3">
                                <label class="col-4 col-form-label">Activity Type</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100 p-0">
                                <thead>
                                    <tr class="table-primary">
                                        <th>SL.</th>
                                        <th>Task</th>
                                        <th>Time</th>
                                        <th>Sequence</th>
                                        <th>Quantity</th>
                                        <th>Quality</th>
                                        <th>Delivery</th>
                                        <th>Time Taken</th>
                                        <th>Target</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ray Waters</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- view -->
<div class="modal fade tesk-view" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">TASK View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <div class="row pb-3">
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Domain</label>
                        <div class="col-8">
                            <p class="form-control">Section B : Preparatory framework</p>
                        </div>
                    
                    </div>
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Sub-Domain</label>
                        <div class="col-8">
                            <p class="form-control">Definitions</p>
                        </div>
                    </div>
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Area</label>
                        <div class="col-8">
                            <p class="form-control">Gross Motor Skills</p>
                        </div>
                    </div>
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Activity</label>
                        <div class="col-8">
                            <p class="form-control">General Play</p>
                        </div>
                    </div>
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Activity Type</label>
                        <div class="col-8">
                            <p class="form-control">A</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100 p-0">
                        <thead>
                            <tr class="table-primary">
                                <th>SL.</th>
                                <th>Task</th>
                                <th>Time</th>
                                <th>Sequence</th>
                                <th>Quantity</th>
                                <th>Quality</th>
                                <th>Delivery</th>
                                <th>Time Taken</th>
                                <th>Target</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ray Waters</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
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
<script>
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
