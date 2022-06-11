@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') WAREHOUSE @endslot
    @endcomponent
    {{-- code  --}}

 
        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Warehouse Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Warehouse List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <x-input-text name="Name" pleceholder="Enter your name"></x-input-text>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Location</label>
                            <div class="col-sm-9">
                                <x-input-text name="Location" pleceholder="Enter your Location"></x-input-text>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Store type</label>
                            <div class="col-sm-9">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>....</option>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <x-input-textarea name="Description"></x-input-textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Managed by</label>
                            <div class="col-sm-9">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>....</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex  flex-wrap float-end gap-2">
                            <button type="button" class="btn btn-outline-success waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Reset</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
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
                                          <th>Location</th>
                                          <th>Store type</th>
                                          <th>Log</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Office Outlet </td>
                                          <td>New DOHS</td>
                                          <td>Warehouse</td>
                                          <td>Create: Md. Rizwanur Rahman @ 2019-01-13 09:38:31 <br> Update: Ohidul Hassan @ 2021-03-17 17:04:33
                                          </td>
                                          <td><button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
@endsection