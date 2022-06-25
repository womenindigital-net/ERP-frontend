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
                            <span class="d-none d-sm-block">ChequeBook Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">ChequeBook List</span>
                        </a>
                    </li>
                </ul>
              <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-1">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Checkbook Name</label>
                                                <div class="col-sm-9">
                                                  <x-input-text name="checkbook_name" placeholder="Checkbook Name"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Bank Account</label>
                                                <div class="col-sm-9">
                                                  <x-input-select name="bank_account" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Start Page</label>
                                                <div class="col-sm-9">
                                                  <x-input-text name="start_page" placeholder="Enter Start Page"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">End Page</label>
                                                <div class="col-sm-9">
                                                  <x-input-text name="end_page" placeholder="Enter End Page"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Creation Date</label>
                                                <div class="col-sm-9">
                                                  <x-input-text type="date" name="creation_date" placeholder="mm/dd/yyyy"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
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
                                            <table class="table table-borderd w-100">
                                              <thead>
                                                <tr class="table-primary">
                                                    <th>Name</th>
                                                    <th>Bank</th>
                                                    <th>Start Page</th>
                                                    <th>End Page</th>
                                                    <th>Creation Date</th>
                                                    <th>Is Finished</th>
                                                    <th>Remaining Page</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>City Bank Ltd</td>
                                                    <td>Bank-The City Bank Ltd (3101829023001)</td>
                                                    <td>1588440</td>
                                                    <td>1588495</td>
                                                    <td>2021-07-07</td>
                                                    <td>N</td>
                                                    <td>remaining page</td>
                                                    <td>Create: Ohidul Hassan @ 2021-07-07 20:32:55
                                                        Update: A.K.M Shahidullah @ 2021-10-07 19:21:25</td>
                                                  <td>
                                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                                        class="fas fa-check"></i>
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
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div
@endsection