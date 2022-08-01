@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Budget Template Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Budget Template List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active " id="home" role="tabpanel ">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ms-0">
                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted mt-4">
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <form action="{{ route('budget-template.store') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-12">
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-2 d-flex align-items-center">
                                                                                        <h6>Project</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-select name="project_id"
                                                                                            :records="$project_id" targetColumn="title" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-12">
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-2 d-flex align-items-center">
                                                                                        <h6>Title</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-text name="title"
                                                                                            type="text"
                                                                                            placeholder="Enter tittle here" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 p-0">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title mb-4">All products</h4>
                                                                        <form class="repeater"
                                                                            enctype="multipart/form-data">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 p-0 pe-1">
                                                                                    <label for="budget_head">Budget
                                                                                        Head</label>
                                                                                </div>
                                                                                <div class="col-lg-4 p-0 pe-1">
                                                                                    <label for="account_id">Account</label>
                                                                                </div>
                                                                                <div class="col-lg-4 p-0 pe-1">
                                                                                    <label for="note">Note</label>
                                                                                </div>
                                                                            </div>
                                                                            <div data-repeater-list="group-a">
                                                                                <div data-repeater-item
                                                                                    class="row removeRow">
                                                                                    <div class="col-lg-4  p-0 pe-1 pb-1">
                                                                                        <x-input-select name="budget_head"
                                                                                            :records="$budgetHead" targetColumn="title" />
                                                                                    </div>
                                                                                    <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                                                        <x-input-select name="account_id"
                                                                                            :records="$account"  />
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                                        <x-input-text name="note" />
                                                                                        <button
                                                                                            class="btn btn-danger ms-2 removeBtn">
                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input data-repeater-create type="button"
                                                                                class="btn btn-success mt-3 mt-lg-0"
                                                                                value="Add" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-outline-success  waves-light">
                                                                    Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane mt-4" id="profile" role="tabpanel">
                            <livewire:budget-template-list />
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
@endsection
