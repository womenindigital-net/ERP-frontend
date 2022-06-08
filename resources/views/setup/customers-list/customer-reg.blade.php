@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') COMPANIES @endslot
@endcomponent
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Customer Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Customer Type List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Student Create</h4>
                                                        <div class="mb-2 row">
                                                            <label for="example-text-input"
                                                                class="col-md-4 col-form-label">Name</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="name"  placeholder="Enter Customer Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5 row">
                                                            <label for="example-search-input"
                                                                class="col-md-4 col-form-label">Mobile</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Mobile"  placeholder="Mobile"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-email-input"
                                                                class="col-md-4 col-form-label">Address 1</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Address 1"  placeholder="Address 1"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-email-input"
                                                                class="col-md-4 col-form-label">City</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Address 1"  placeholder="City Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5 row">
                                                            <label for="example-url-input"
                                                                class="col-md-4 col-form-label">State</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Address 1"  placeholder="State Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-text-input"
                                                                class="col-md-4 col-form-label">Phone1</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Phone"  placeholder="Phone One Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input"
                                                                class="col-md-4 col-form-label">Email</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Email"  placeholder="Enter Email Address Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-body">
                                                        <div class="mb-5 mt-3 row">
                                                            <label class="col-md-4 col-form-label">Select</label>
                                                            <div class="col-md-8">
                                                                <select class="form-select">
                                                                    <option>Select</option>
                                                                    <option>Organization</option>
                                                                    <option>Individual (In House)</option>
                                                                    <option>Individual (Out Sider)r</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- Address --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input"
                                                                class="col-md-4 col-form-label">Address</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Address"  placeholder="Enter Address Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        {{-- Zip Code --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input"
                                                                class="col-md-4 col-form-label">Zip Code</label>
                                                            <div class="col-md-8">
                                                                <x-input-text type="number" name="Zip Code"  placeholder="Zip Code"></x-input-text>
                                                            </div>
                                                        </div>
                                                        {{-- Country --}}
                                                        <div class="mb-5 row">
                                                            <label for="example-search-input"
                                                                class="col-md-4 col-form-label">Country</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Country"  placeholder="Country Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        {{-- Phone2 --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input"
                                                                class="col-md-4 col-form-label">Phone2 </label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="Phone"  placeholder="Phone Two Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <h5 class="mb-5">Is Card Allow &nbsp;
                                                                <input class="form-check-input" type="checkbox"
                                                                id="gridCheck">
                                                            </h5>
                                                        </div>
                                                        <label for="example-search-input"
                                                            class="col-md-2 col-form-label">
                                                            <h5>Advanced</h5>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <x-input-text name="Phone"  placeholder="Advanced Amount"></x-input-text>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <h5 class="mb-5">Is Active &nbsp;
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="gridCheck">
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <button type="button" class="btn btn-outline-danger w-md">Reset</button>
                                    <button type="submit" class="btn btn-outline-info w-md">Save</button>
                                </div>
                                <div class="col-lg-3"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
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
                                                  <th>Type</th>
                                                  <th>Mobile</th>
                                                  <th>DOB</th>
                                                  <th>City</th>
                                                  <th>Phone1</th>
                                                  <th>Email</th>
                                                  <th>Credit Allow</th>
                                                  <th>Limit</th>
                                                  <th>Due</th>
                                                  <th>Log</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>VF Asia</td>
                                                  <td>Organization</td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td>No</td>
                                                  <td>0</td>
                                                  <td>0</td>
                                                  <td>Create: Ohidul Hassan<br> @ 2021-06-20 11:20:46 <br>
                                                      There is no update record.</td>
                                                  <td>      
                                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

{{-- Form --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

@endsection