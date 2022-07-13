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
                            <span class="d-none d-sm-block">Transaction Analysis View</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="modal-body p-0">
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                  <div class="row d-flex">
                                        <div class="col-5 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">From:</label>
                                            <div class="col-md-8">
                                                <div class="w-100">
                                                    <x-input-text type="date" name="form" placeholder="dd/mm/yyyy"/>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">To:</label>
                                            <div class="col-md-8">
                                                <div class="w-100">
                                                    <x-input-text type="date" name="to" placeholder="dd/mm/yyyy"/>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary" type="button" id="expend">Show</button>
                                        </div>
                                        <div class="col-2 pb-3">
                                            <button class="btn btn-success" type="button" id="expend">Print</button>
                                        </div>
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
                                            <x-input-text type="search" name="search" />
                                        </label>
                                      </div>
                                    </div>
                                    <div class="table-responsive">
                                      <table class="table w-100 table-bordered">
                                        <thead>
                                          <tr class="table-primary">
                                        <th>Label</th>
                                        <th>Debit</th>
                                        <th>Credit</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                          <td>Accounting /Tally/ Audit/Legal expenses</td>
                                          <td>135000.00</td>
                                          <td></td>
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
        </div>
    </div>
</div>
@endsection