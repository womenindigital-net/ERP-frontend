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
                                    <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Name:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="department_name" type="text"
                                        placeholder="Department name here">
                                    </x-input-text>
                                    </div>
                                </div>
                                <div class="col-12 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Head of Department:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="head_of_department" :records="[
                                          'Test Muhammad Employee' => 'Test Muhammad Employee',
                                          'Sahanaj  Akter' => 'Sahanaj  Akter',
                                          'Md. Kutub Uddin' => 'Md. Kutub Uddin',
                                          'Arup  Mandal' => 'Arup  Mandal',
                                          'Md. Rizwanur Rahman' => 'Md. Rizwanur Rahman',
                                          'Angon  Rahman' => 'Angon  Rahman',
                                        ]" />
                                    </div>
                                </div>
                                <div class="col-12 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Description:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="description" type="text"
                                        placeholder="Department description here">
                                    </x-input-text>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-end gap-2">
                                  <div class="col-md-1 ">
                                    <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                  </div>
                                  <div class="col-md-1">
                                    <button class="btn btn-success">Save</button>
                                  </div>
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
                            <input type="search" name="search" class="form-control form-control-sm" placeholder="">
                          </label>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th>Department Name</th>
                                <th>Deaprtmental Head </th>
                                <th>Description</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Programme -2</td>
                                <td>Begum Nurjahan Dipa</td>
                                <td></td>
                                <td>Create: Karishma Cultural @ 2018-12-27 17:24:24
                                    Update: Ohidul Hassan @ 2022-05-11 14:52:28
                                </td>
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