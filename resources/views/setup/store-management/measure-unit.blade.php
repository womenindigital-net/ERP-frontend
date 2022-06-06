@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
 
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')  MEASURE UNIT @endslot
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
                                <span class="d-none d-sm-block">MEASURE UNIT</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">MEASURE UNIT List</span>    
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="finished_good" role="tabpanel">
                            <!-- form start -->
                            <div class="col-12 d-flex p-2">
                                <label for="example-text-input" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <x-input-text name="name" placeholder="Store Name Here"></x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex p-2">
                                <label for="example-text-input" class="col-md-4 col-form-label">Small Unit</label>
                                <div class="col-md-8">
                                    <select class="form-control select2 form-select">
                                        <option>Select</option>
                                        <option value="1">Gram</option>
                                        <option value="2">Meter</option>
                                        <option value="3">Litter</option>
                                        <option value="4">Minute</option>
                                        <option value="5">Piece</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 d-flex p-2">
                                <label for="example-text-input" class="col-md-4 col-form-label">Unit Factor</label>
                                <div class="col-md-8">
                                    <x-input-text name="name" placeholder="Store Name Here"></x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex p-2">
                                <label for="example-text-input" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <x-input-text name="name" placeholder="Enter Description Here"></x-input-text>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect">Reset</button>
                                <button type="button" class="btn btn-success waves-effect waves-light">Save </button>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane" id="finished_good_list" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                      class="form-control form-control-sm form-select form-select-sm">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="100">100</option>
                                    </select> entries
                                  </label>
                                </div>
                                <div class="col-sm-12 col-md-6 text-end">
                                  <label style="display: inline-flex;align-items: center;">Search:
                                    <input type="search" class="form-control form-control-sm" placeholder="">
                                  </label>
                                </div>
                              </div>
                              <div class="table-responsive">
                                <table class="table w-100 table-bordered">
                                  <thead>
                                <tr class="table-primary">  
                                    <th>Name</th>
                                    <th>Small Unit</th>
                                    <th>Unit Factor</th>
                                    <th>Description</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>    
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td>Kilogram</td>
                                        <td>Gram</td>
                                        <td>1000</td>
                                        <td>descripton</td>
                                        <td>Create: Arif Dev @ 2018-11-11 12:32:35
                                          There is no update record.</td>
                                        <td>
                                          <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                            <i class="mdi mdi-pencil"></i>
                                          </button>
                                          <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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

@endsection
@section('script-bottom')
@endsection