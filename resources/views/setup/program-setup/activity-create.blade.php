@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')TASK WEIGHT SETTINGS @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".text-add-or-edit">Add</button>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive w-100">
                        <thead>
                            <tr>
                                <th class="col-3"> Activity</th>
                                <th class="col-5">Task</th>
                                <th class="col-2">Activity Type</th>
                                <th class="col-2">Log</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>General Play</td>
                                <td>Push and Pull Doors open and closed</td>
                                <td>A</td>
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
                                <td>Organized Play	</td>
                                <td>Riding a tricycle</td>
                                <td>Riding</td>
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
                <h5 class="modal-title" id="myExtraLargeModalLabel">Add or Edit Task Activities Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6 row mb-3">
                                <label class="col-4 col-form-label">Domain</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>Section B : Preparatory framework</option>
                                        <option>Section E:  Domain 01 - Physical development</option>
                                        <option>Section F:  Domain 02 : Intellectual / cognitive development</option>
                                        <option>Section G : Domain 03 - Emotional development</option>
                                    </select>
                                </div>
                            
                            </div>
                            <div class="col-6 row mb-3">
                                <label class="col-4 col-form-label">Sub-Domain</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>Definitions</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 row mb-3">
                                <label class="col-4 col-form-label">Area</label>
                                <div class="col-8">
                                    <select class="form-select">
                                        <option>--Select--</option>
                                        <option>Gross Motor Skills</option>
                                        <option>Fine Motor Skills</option>
                                        <option>Oral-motor activities</option>
                                    </select>
                                </div>
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
