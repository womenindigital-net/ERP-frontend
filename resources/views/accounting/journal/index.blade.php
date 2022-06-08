@extends('layouts.master')

@section('title') Journal @endsection

@section('css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">

<!-- Sweet Alert-->

<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
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
                        <form method="post" action="{{route('journal.store')}}">
                            @csrf
                            <!-- form start -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <x-input-select :records="$projects" name="project_id" targetColumn="title" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Trans.Amount</label>
                                        <x-input-text name="transaction_amount" placeholder="Trans.Amount" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Vaucher date</label>
                                        <x-input-text type="date" name="voucher_date" placeholder="dd M, yyyy" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Particulars</label>
                                        <x-input-text name="particulars" placeholder="Particulars" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Reference</label>
                                        <x-input-text name="reference" placeholder="Reference" />
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
                                            <div class="repeater">
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
                                                <div data-repeater-list="journal">
                                                    <div data-repeater-item class="row removeRow">
                                                        <div class=" col-lg-3 p-0 p-0 pe-1 pb-1">
                                                            <x-input-text name="account_no" placeholder="Acc. Number" />
                                                        </div>

                                                        <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                            <x-input-text name="account_particulars"
                                                                placeholder="Acc. Particular" />
                                                        </div>

                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                            <x-input-text name="debit" placeholder="Debit" />
                                                        </div>

                                                        <div class=" col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <x-input-text name="credit" placeholder="Credit" />
                                                            <button type="button"
                                                                class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light removeBtn"
                                                                id="sa-warning">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                            {{-- <button type="button"
                                                                class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light"
                                                                id="sa-warning">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button> --}}
                                                        </div>
                                                    </div>

                                                </div>
                                                <input data-repeater-create type="button"
                                                    class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                            </div>
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
                        </form>
                    </div>

                    <div class="tab-pane" id="journal_list" role="tabpanel">
                        <livewire:journal-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--  Edit Journal -->
<div class="modal fade modal-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Journal View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                </div>
            </div>
            <div class="row">
            </div>
            <!-- journal form end -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->


@endsection
@section('script')

<!-- form repeater js -->
<script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>


<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}


@endsection