@extends('layouts.master')
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Daily Attendance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Monthely Attendance</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="case-histroy" role="tabpanel">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-12 col-md-8">
                          <label style="display: inline-flex;align-items: center;" class="gap-3">Date
                           <x-input-text type="search"  name="search"/>
                          </label>
                        </div>
                      </div>
                      <label class="text-center pb-2 pt-2">Employee list</label>
                          <div class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="employee">Employee</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1 text-center">
                                    <label for="sing_out">Sign In</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="sing_out">Sign Out</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="remark">Remark</label>
                                </div>
                            </div>
                            <div data-repeater-list="details" id="ProductGroup">
                                <div data-repeater-item class="row removeRow">

                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-text name="employee"/>
                                    </div>

                                    <div class=" col-lg-2 p-0 pe-1 pb-1 text-center">
                                        <x-input-text name="sing_out" type="time" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                          <x-input-text name="sing_out" type="time" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                        <x-input-text name="remark"/>
                                        <button class="btn btn-danger ms-2 removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button"
                                   class="btn btn-success mt-3 px-4 mt-lg-0" value="Add"
                                   id="AddMore"/>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-12 col-md-8">
                          <label style="display: inline-flex;align-items: center;" class=" gap-3">Employee
                            <x-input-text type="search"  name="search"/>
                          </label>
                        </div>
                      </div>
                      <label class="text-center pb-2 pt-2">Attendance list</label>
                          <div class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="date">Date</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1 text-center">
                                    <label for="sing_out">Sign In</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="sing_out">Sign Out</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="remark">Remark</label>
                                </div>
                            </div>
                            <div data-repeater-list="details" id="ProductGroup">
                                <div data-repeater-item class="row removeRow">
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-text name="date" type="date"/>
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1 text-center">
                                        <x-input-text name="sing_out" type="time" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                          <x-input-text name="sing_out" type="time" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                        <x-input-text name="remark"/>
                                        <button class="btn btn-danger ms-2 removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" id="AddMore"/>
                        </div>
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
<script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
@endsection