@extends('layouts.master')

@section('title') Journal @endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') JOURNAL VOUCHER @endslot
@endcomponent


<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#journal" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Journal</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#journal_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Journal List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="journal" role="tabpanel">
                        <!-- form start -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <select class="form-control form-select">
                                        <option>--Select--</option>
                                        <option value="1">Governing Office</option>
                                        <option value="2">Operations</option>
                                        <option value="3">Administration</option>
                                        <option value="4">Finance and Accounts Section</option>
                                        <option value="5">Procurement Section</option>
                                        <option value="6">Inventory Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Trans.Amount</label>
                                    <x-input-text name="NAME" placeholder="Trans.Amount">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Vaucher date</label>
                                    <x-input-text type="date" name="NAME" placeholder="dd M, yyyy">
                                    </x-input-text>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Particulars</label>
                                    <x-input-text name="NAME" placeholder="Particulars">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Reference</label>
                                    <x-input-text name="NAME" placeholder="Reference">
                                    </x-input-text>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <h2 class=" text-center mb-4">Posting Transaction Details</h2>
                                        </div>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-3  p-0 pe-1">
                                                    <label class="pe-2 pb-1">SL</label>
                                                    <label for="name">Acc. Number</label>
                                                </div>
                                                <div class="col-lg-4  p-0 pe-1">
                                                    <label for="email">Acc. Particular</label>
                                                </div>
                                                <div class="col-lg-2 p-0 pe-1">
                                                    <label for="subject">Debit</label>
                                                </div>
                                                <div class="col-lg-3  p-0 pe-1">
                                                    <label for="resume">Credit</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row removeRow" >
                                                    <div class=" col-lg-3 d-flex p-0 p-0 pe-1 pb-1 align-items-center">
                                                        <span class="pe-2 pb-1">01</span>
                                                        <x-input-text name="NAME" placeholder="Acc. Number">
                                                        </x-input-text>
                                                    </div>

                                                    <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                        <x-input-text name="NAME" placeholder="Acc. Particular">
                                                        </x-input-text>
                                                    </div>

                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                        <x-input-text name="NAME" placeholder="Debit">
                                                        </x-input-text>
                                                    </div>

                                                    <div class=" col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                        <x-input-text name="NAME" placeholder="Credit">
                                                        </x-input-text>
                                                        <button class="btn btn-danger ms-2 removeBtn">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-danger w-100">Reset</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success w-100">Save</button>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="tab-pane" id="journal_list" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 d-flex">
                                <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                        class="form-control form-control-sm form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-4 text-enter">
                                <div class="mb-3 text-enter">
                                    <label class="form-label">Journals List</label>
                                    <select class=" form-select">
                                        <option>--Select--</option>
                                        <option value="1">Approved Journals</option>
                                        <option value="2" selected>All Journals</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 text-end d-flex">
                                <label style="display: inline-flex;align-items: center;">Search:
                                    <input type="search" class="form-control form-control-sm" placeholder="">
                                </label>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Project</th>
                                        <th>Voucher Date</th>
                                        <th>Particulars</th>
                                        <th>Trans Amount</th>
                                        <th>Log</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Core Programme</td>
                                        <td>2021-09-30 00:00:00</td>
                                        <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                                        <td>700</td>
                                        <td><small>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</small></td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="bx bx-dollar"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                Showing 1 to 2 of 2 entries
                            </div>
                            <div class="col-sm-12 col-md-6 text-end">
                                <nav>
                                    <ul class="pagination" style="justify-content: end;">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
@section('script')

<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
<!-- Init js -->
<script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

@endsection