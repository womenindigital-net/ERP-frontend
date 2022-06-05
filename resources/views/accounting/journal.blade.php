@extends('layouts.master')

@section('title') Journal @endsection

@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') JOURNAL VOUCHER @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="row pb-3 card-body">

                <div class="col-md-6 offset-md-6 mb-3 text-end">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target=".journal-modal-xl-add"> <i class="fas fa-plus-circle"></i> Add</button>
                </div>
            </div>
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
                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
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
</div> <!-- end col -->



<!--  Edit Journal -->
<div class="modal fade journal-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Add OR Edit Journal
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- journal form start -->
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
                            <x-input-text name="NAME" :readOnly="true" placeholder="Trans.Amount">
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
                                        <div data-repeater-item class="row">
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
                                                <button class="btn btn-danger  ms-2">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0"
                                        value="Add" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- journal form end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-danger" data-bs-dismiss="modal"> Close</button>
                <button type="button" class="btn  btn-success" id="sa-position"> Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--  Extra Large modal example -->
<div class="modal fade journal-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">View Journal
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- journal form start -->
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <p class="form-control">Project</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Voucher
                                    Date</label>
                                <p class="form-control">2021-09-30 00 00.00</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Trans Amount</label>
                                <p class="form-control">5000 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Particulars</label>
                                    <p class="form-control">payment for student</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">Reference</label>
                                    <p class="form-control">Reference</p>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- journal form end -->
                <!-- table start -->
                <div class="row">
                    <h2 class=" text-center mb-4">Posting Transaction Details</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Acc. Number</th>
                                                <th style="width: 20%;">Acc.Particular</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">1</td>
                                                <td data-field="name">4255-Assessment fees</td>
                                                <td data-field="age">Ismam Reza</td>
                                                <td data-field="credit"></td>
                                                <td data-field="debit">5000</td>
                                            </tr>
                                            <tr data-id="2" style="border-bottom-style: none;">
                                                <td data-field="id" style="width: 80px">2</td>
                                                <td data-field="name">1010-Cash Operating Account</td>
                                                <td data-field="age">Ismam Reza</td>
                                                <td data-field="credit">5000</td>
                                                <td data-field="debit"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">Total: </td>
                                                <td>5000</td>
                                                <td>5000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <!-- journal form end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection
@section('script')

<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>

<!-- Init js -->
<script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

@endsection