@extends('layouts.master')
@section('css')
@endsection
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
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
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
                            <table class="table table-bordered w-100">
                              <thead>
                                <tr class="table-primary">
                                    <th>SL</th>
                                    <th>Employee ID </th>
                                    <th>Employee Full Name</th>
                                    <th>Leave Type Name</th>
                                    <th>Leave Carry Overed</th>
                                    <th>Leave Entitled</th>
                                    <th>Leave Cashed</th>
                                    <th>Leave Enjoyed</th>
                                    <th>Leave Elapsed</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>1 </td>
                                    <td>1</td>
                                    <td>Test Muhammad Employee</td>
                                    <td>Test Leave</td>
                                    <td>0.00 </td>
                                    <td>3.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00 </td>
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
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                      <div class="modal-body">
                        <div class="col-12 d-flex">
                            <label for="example-text-input" class="col-md-2 col-form-label text-end">Employee Type Name</label>
                            <div class="col-md-8">
                                <x-input-text name="employeetype_name" type="text"
                                placeholder="">
                            </x-input-text>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <label for="example-text-input" class="col-md-2 col-form-label text-end">Type Desc</label>
                            <div class="col-md-8">
                                <x-input-text name="type_desc" type="text"
                                placeholder="">
                            </x-input-text>
                            </div>
                        </div>
                      </div>
                      <div class=" mb-2 d-flex row">
                          <div class="col-3 d-flex">
                              <label for="example-text-input" class="col-md-4 col-form-label text-end" >Is Contract</label>
                              <div class="col-md-2 ms-5">
                                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                      <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                      <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-3 d-flex">
                              <label for="example-text-input" class="col-md-4 col-form-label text-end" >	Bonus Eligible</label>
                              <div class="col-md-2 ms-5">
                                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off" checked>
                                      <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                                      <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-3 d-flex">
                              <label for="example-text-input" class="col-md-4 col-form-label text-end" >Daily Basis</label>
                              <div class="col-md-2 ms-5">
                                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                      <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                      <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-3 d-flex">
                              <label for="example-text-input" class="col-md-4 col-form-label text-end" >Service Provider</label>
                              <div class="col-md-2 ms-5">
                                  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                      <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                      <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                      <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="">
                          <div class="col-12 d-flex mb-3">
                              <label for="example-text-input" class="col-md-2 col-form-label text-end ">Note</label>
                              <div class="col-md-8">
                                  <x-input-text name="note" type="text"
                                  placeholder="">
                                  </x-input-text>
                              </div>
                          </div>
                      </div>
                      <div class="row modal-footer">
                          <div class="col-md-1">
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
@endsection

@section('script')
@endsection