@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Chequebook @endslot
@endcomponent
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
                        <p class="mb-0">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-1">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Checkbook Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Store Name Here ">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Bank Account</label>
                                                <div class="col-sm-9">
                                                <select rows="3" class="form-control select2 form-select strip-tags input-border"       id="BankAccount"  name="BankAccount">
                                                    <option selected="selected" value="0">Select</option>
                                                    <option value="1">1050001::Bank - Brac Bank (A/c # 1555204025093001)</option>
                                                    <option value="2">1050002::Bank - Mutual Trust Bank</option>
                                                    <option value="3">1050003::Bank - SCB (01-1308636-01)</option>
                                                    <option value="4">1050004::Bank-The City Bank Ltd (3101829023001)</option>
                                                    <option value="5">1050005::Bank - FSIB Ltd. (010311100012296)</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Start Page</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Start Page">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">End Page</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter End Page ">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Creation Date</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="horizontal-firstname-input" placeholder="dd/mm/yyyy ">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div class="text-end">
                                                        <button type="button" class="btn  btn-danger me-3" data-bs-dismiss="modal"> Close</button>
                                                        <button type="button" class="btn  btn-success" data-bs-dismiss="modal"> Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </p>
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