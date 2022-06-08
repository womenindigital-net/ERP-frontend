@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Warehouse Setup @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#finished_good" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Warehouse Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Warehouse Setup List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="finished_good" role="tabpanel">
                        <!-- form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="Location" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Store Type</label>
                                    <select class="form-control select2">
                                        <option>--Select--</option>
                                        <option value="1">Warehouse</option>
                                        <option value="2">Office Location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Managed By</label>
                                    <select class="form-control select2">
                                        <option>--Select--</option>
                                        <option value="1">Imran</option>
                                        <option value="2">Misuk</option>
                                        <option value="3">Pintu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea type="text" name="" id="" rows="4" class="form-control"
                                        placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <button class="btn btn-danger font-size-16 waves-effect waves-light w-100"> <i
                                        class="bx bx-reset align-middle me-1 mb-1"></i>Reset</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success font-size-16 waves-effect waves-light w-100"
                                    id="sa-position"><i class="bx bx-save align-middle me-1 mb-1"></i>Save</button>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="tab-pane" id="finished_good_list" role="tabpanel">
                        <div class="row">
                            <div class="col p-0 table-responsive border-0">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Store Type</th>
                                            <th>Log</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Office Outlet</td>
                                            <td>New DOHS</td>
                                            <td>Warehouse</td>
                                            <td>
                                                <small>Create: Md. Rizwanur Rahman
                                                    @ 2019-01-13 09:38:31</small>
                                            </td>
                                            <td class="text-center">
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"
                                                    id="sa-warning">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
@endsection
@section('script-bottom')
@endsection