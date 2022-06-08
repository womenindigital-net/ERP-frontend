@extends('layouts.master')

@section('title') Journal @endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                                            <x-input-select :records="$projects" name="project_id"
                                                            targetColumn="title"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Trans.Amount</label>
                                            <x-input-text name="transaction_amount" placeholder="Trans.Amount"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label>Vaucher date</label>
                                            <x-input-text type="date" name="voucher_date" placeholder="dd M, yyyy"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Particulars</label>
                                            <x-input-text name="particulars" placeholder="Particulars"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">Reference</label>
                                            <x-input-text name="reference" placeholder="Reference"/>
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
                                                    <div data-repeater-list="group-a">
                                                        <div data-repeater-item class="row removeRow">
                                                            <div
                                                                class=" col-lg-3 d-flex p-0 p-0 pe-1 pb-1 align-items-center">
                                                                <span class="pe-2 pb-1">01</span>
                                                                <x-input-text name="account_no"
                                                                              placeholder="Acc. Number"
                                                                              :multiple="true"/>
                                                            </div>

                                                            <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                                <x-input-text name="account_particulars"
                                                                              placeholder="Acc. Particular"
                                                                              :multiple="true"/>
                                                            </div>

                                                            <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                <x-input-text name="debit" placeholder="Debit"
                                                                              :multiple="true"/>
                                                            </div>

                                                            <div
                                                                class=" col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                <x-input-text name="credit" placeholder="Credit"
                                                                              :multiple="true"/>
                                                                <button class="btn btn-danger ms-2 removeBtn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <input data-repeater-create type="button"
                                                           class="btn btn-success mt-3 px-4 mt-lg-0" value="Add"/>
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
                            <livewire:journal-list/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('script')

    <!-- form repeater js -->
    <script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

    {{--<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>--}}
    <!-- Init js -->
    {{--<script src="{{ asset('assets/js/pages/table-responsive.init.js') }}"></script>--}}

@endsection
