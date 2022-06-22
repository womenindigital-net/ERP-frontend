@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab Panes One -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="modal-body p-0">
                           <div class="card p-0 m-0">
                                <div class="card-body">
                                    <div class="row pb-3">
                                        <div class="col-6 d-flex">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name:</label>
                                            <div class="col-md-10">
                                                <x-input-text placeholder="Name" name="name"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Seq.No:</label>
                                            <div class="col-md-10">
                                                <x-input-text placeholder="Seq No" name="seq_no" type="number"></x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-6 d-flex">
                                            <label for="example-date-input" class="col-md-2 col-form-label">Tier No:</label>
                                            <div class="col-md-10">
                                                <x-input-text placeholder="Tier No" name="tier_no" type="number"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <label class="col-2 col-form-label"> Parent:</label>
                                            <div class="col-10">
                                                <x-input-select name="parent_id" :records="[]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-12 d-flex">
                                            <label for="example-date-input" class="col-md-1 col-form-label">Description:</label>
                                            <div class="col-md-11">
                                                <x-input-textarea name="description"></x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                     <!-- Tab Panes Two -->
                    <div class="tab-pane" id="profile" role="tabpanel1">
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
                            <x-input-text type="search" name="search" />
                          </label>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table w-100 table-bordered">
                          <thead>
                            <tr class="table-primary">
                              <th>Name</th>
                              <th>Parent</th>
                              <th>Log</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Wages Employment </td>
                              <td>32 </td>
                              <td>Create: Ohidul Hassan @
                                  Update: Ohidul Hassan @ </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                  <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
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
            </div>
        </div>
    </div> 
</div
@endsection