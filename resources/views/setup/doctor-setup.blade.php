@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')Doctor Setup @endslot
    @endcomponent
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 pb-2 text-end">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light "
                        data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i
                            class="fas fa-plus-circle"></i> Add</button>
                      </div>
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
                              <th>Dr. Name</th>
                              <th>Organization</th>
                              <th>Contact</th>
                              <th>Address</th>
                              <th>Experties</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>DR</td>
                              <td>Blank</td>
                              <td>017855468564</td>
                              <td>Dhaka-Bangladesh</td>
                              <td>DR</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                  <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                  <i class="mdi mdi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="bx bx-dollar"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="fas fa-arrow-circle-right"></i>
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
    </div> <!-- end row -->

<!-- sample modal content -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Doctor Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-6 d-flex">
                                <label for="example-text-input" class="col-2 col-form-label">Dr Name</label>
                                <div class="col-10">
                                    <x-input-text name="Name" placeholder="Doctor Name"></x-input-text>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <label for="example-text-input" class="col-2 col-form-label">Organization</label>
                                <div class="col-10">
                                    <x-input-text name="Organization" placeholder="Organization"></x-input-text>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 d-flex">
                                <label for="example-date-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10">
                                    <x-input-text name="Contact" placeholder="Contact"></x-input-text>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <label class="col-2 col-form-label">Address</label>
                                <div class="col-10">
                                    <x-input-text name="Address" placeholder="Address"></x-input-text>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3 d-flex">
                            <label class="col-1 col-form-label">Experties</label>
                            <div class="col-11">
                                <x-input-textarea name="Experties"></x-input-textarea>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')

@endsection