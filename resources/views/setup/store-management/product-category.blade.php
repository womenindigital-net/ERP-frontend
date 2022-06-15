@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#finished_good" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Product Category Setup</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Product Category Setup List</span>    
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
                                    <label>Parent Category</label>
                                    <x-input-select name="parent_category" :records="[]" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <x-input-text name="name" placeholder="Category Name Here"></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Sequence</label>
                                    <x-input-text name="seqence" placeholder="Sequence"></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Tire No.</label>
                                    <x-input-text type="number" name="tire_no" placeholder="Tire No."></x-input-text>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Description</label>
                                    <x-input-textarea name="description"></x-input-textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <button class="btn btn-outline-danger font-size-16 waves-effect waves-light w-50">Reset</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-outline-success font-size-16 waves-effect waves-light w-50" id="sa-position">Save</button>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="tab-pane" id="finished_good_list" role="tabpanel">
                        <div class="row">
                            <div class="col p-0 table-responsive border-0">
                                <table id="datatable-buttons" class="table table-bordered table-responsive w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            
                                            <th>Category Name</th>
                                            <th>Parent Acc</th>
                                            <th>Sequence</th>
                                            <th>Tire</th>
                                            <th>Log</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Food bill</td>
                                            <td>56</td>
                                            <td>45</td>
                                            <td>25</td>
                                            <td>
                                                <small>Create: Md. Rizwanur Rahman
                                                @ 2019-01-13 09:38:31
                                                <br>
                                                    @ 2021-03-17 17:04:33</small>
                                            </td>
                                            
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light" id="sa-warning">
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

@endsection
@section('script-bottom')
@endsection