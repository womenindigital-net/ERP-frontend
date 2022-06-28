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
                      
                          <div class="modal-body">
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Package Name:</label>
                                <div class="col-md-8">
                                    <x-input-text name="employeetype_name" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Description:</label>
                                <div class="col-md-8">
                                    <x-input-text name="type_desc" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Amount:</label>
                                <div class="col-md-8">
                                    <x-input-text name="type_desc" type="number"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Is In Percent :</label>
                                <div class="col-md-8">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio1" id="btnradio4" checked>
                                        <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                        <input type="radio" class="btn-check" name="btnradio1" id="btnradio5" >
                                        <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Sal Head Id:</label>
                                <div class="col-md-8">
                                  <x-input-select name="student_id"
                                  :records="[]" />
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Total Amount Each Year:</label>
                                <div class="col-md-8">
                                    <x-input-text name="type_desc" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Curnc Id:</label>
                                <div class="col-md-8">
                                  <x-input-select name="student_id"
                                  :records="[]" />
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
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">   
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
                                <th>Package Name</th>
                                <th>Amount</th>
                                <th>IsInPercent</th>
                                <th>Salary Head</th>
                                <th>Each Year Payment</th>
                                <th>Currency</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Eid Bonus</td>
                                <td>50.0000</td>
                                <td>Y</td>
                                <td>Basic</td>
                                <td>30000 </td>
                                <td>Bangladeshi Taka</td>
                                <td>Create: Shonod Digital @ 2018-12-26 20:11:36</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
</div>
@endsection

@section('script')
@endsection