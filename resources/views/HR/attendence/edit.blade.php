@extends('layouts.master')
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
                            <div class="modal-body p-0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <label style="display: inline-flex;align-items: center;" class="gap-3">Date
                                            <x-input-text type="search" name="date" />
                                        </label>
                                    </div>
                                </div>
                                <h6 class="text-center pb-2">Employee list</h6>
                                 <form class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0  text-center">
                                         <label for="employee">Employee</label>
                                        </div>
                                        <div class="col p-0 text-center">
                                         <label for="sing_out">Sign In</label>
                                        </div>
                                        <div class="col p-0  text-center">
                                         <label for="sing_out">Sign Out</label>
                                        </div>
                                        <div class="col p-0  text-center">
                                         <label for="remark">Remark</label>
                                        </div>
                                    </div>
                                     <div data-repeater-list="group-a">
                                        <div data-repeater-item="" class="row ms-1 gap-2 removeRow">
                                            <div class=" col p-0  pb-1">
                                             <x-input-text name="employee" />
                                            </div>
                                            <div class=" col p-0  pb-1">
                                             <x-input-text name="sing_out" type="time" />
                                            </div>
                                            <div class=" col p-0  pb-1">
                                             <x-input-text name="sing_out" type="time" />
                                            </div>
                                            <div class=" col p-0 gap-1 pb-1 pe-2 d-flex">
                                             <x-input-text name="remark" />
                                                <button class="btn btn-danger waves-effect waves-light  removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create="" type="button" class="btn btn-success waves-effect waves-light mt-3 ms-1 mt-lg-0" value="Add">
                                </form>
                                <div class=" d-flex justify-content-end gap-2">
                                    <div class="col-md-1 ">
                                        <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-success w-100">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <label style="display: inline-flex;align-items: center;" class=" gap-3">Employee
                                            <x-input-text type="search" name="search" />
                                        </label>
                                    </div>
                                </div>
                                <h6 class="text-center pb-2">Attendance list</h6>
                                  <form class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0  text-center">
                                         <label for="date">Date</label>
                                        </div>
                                        <div class="col p-0 text-center">
                                         <label for="sing_out">Sign In</label>
                                        </div>
                                        <div class="col p-0  text-center">
                                         <label for="sing_out">Sign Out</label>
                                        </div>
                                        <div class="col p-0  text-center">
                                         <label for="remark">Remark</label>
                                        </div>
                                    </div>
                                     <div data-repeater-list="group-a">
                                        <div data-repeater-item="" class="row ms-1 gap-2 removeRow">
                                            <div class=" col p-0  pb-1">
                                             <x-input-text name="date" type="date" />
                                            </div>
                                            <div class=" col p-0  pb-1">
                                             <x-input-text name="sing_out" type="time" />
                                            </div>
                                            <div class=" col p-0  pb-1">
                                             <x-input-text name="sing_out" type="time" />
                                            </div>
                                            <div class=" col p-0 gap-1 pb-1 pe-2 d-flex">
                                             <x-input-text name="remark" />
                                                <button class="btn btn-danger waves-effect waves-light  removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create="" type="button" class="btn btn-success waves-effect waves-light mt-3 ms-1 mt-lg-0" value="Add">
                                </form>
                                <div class=" d-flex justify-content-end gap-2">
                                    <div class="col-md-1 ">
                                        <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-success w-100">Save</button>
                                    </div>
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
