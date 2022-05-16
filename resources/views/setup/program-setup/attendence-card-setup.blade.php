@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Student_attendance_card_setup @endslot
    @endcomponent
    {{-- code  --}}

 
        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Student Card Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Student Card List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        
                        <div class="mb-3 row m-auto">
                            <div class="col-lg-6">
                                <label class="form-label">Student</label>
                                <select class="form-select">
                                    <option>--Select--</option>
                                    <option>Alamin Islam</option>
                                    <option>SAFWAT NASIF</option>
                                    <option>Md. Moinul Islam Supta</option>
                                    <option>Rumi Akhter</option>
                                    <option>abdullah-al-nafi antor</option>
                                    <option>Md. Shakib Khan</option>
                                    <option>SARRAJ SARWAR</option>
                                    <option>Humaira Sultana</option>
                                    <option>Tabassum Mehejbeen Liana</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label"> Card Number</label>
                                <input class="form-control" type="number"  placeholder="Enter Number">
                            </div>
                        </div>
                        <div class="text-end pe-2">
                            <button type="button" class="btn btn-danger waves-effect waves-light">Reset</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <table id="datatable" class="table table-bordered dt-responsive w-100">
                            <thead>
                                <tr>
                                    <th class="">Student Name</th>
                                    <th>Card Number</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>System </td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
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

            </div>
        </div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection