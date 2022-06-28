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
                      <form action="{{route('setup.payroll-management.salary_head_setup.create')}}" method="POST">
                          @csrf
                        <!-- Tab panes One Add  -->
                    <div class="modal-body">
                        <div class="col-md-12 d-flex">
                          <div class="col-md-6 mb-3">
                              <label class="form-label">Head Name</label>
                                <x-input-text name="head_name" placeholder="Enter Head Name Here"></x-input-text>
                          </div>
                          <div class="col-md-6 ms-2 mb-3">
                              <label class="form-label">Head Name Bangla</label>
                              <x-input-text name="head_name_bangla" placeholder="Enter Head Name Bangla Here"></x-input-text>
                          </div>
                      </div>
                    <div class="col-md-12 d-flex">
                      <div class="col-md-6 mb-3">
                          <label class="form-label">Default Amount</label>
                            <x-input-text name="default_amount" type="number" placeholder="Enter Default Amount Here"></x-input-text>                          
                      </div>
                      <div class="col-md-6 ps-2  mb-3">
                          <label class="form-label">Account</label>
                          <x-input-select name="account" :records="[]" />
                      </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="col-md-6 mb-3 p-3">
                            <div>
                              <x-input-radio-or-check label="Head Nature" :records="$constants::$setup"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                              <x-input-radio-or-check label="Is Other Payment" :records="$constants::$salaryHead"/>
                            </div>
                        </div>
                      </div>
                    <div class="col-md-12 pe-3 ps-3 mb-3">
                        <label class="form-label">Description</label>
                        <x-input-textarea name="description" placeholder="Enter salary head description"></x-input-textarea>
                    </div>  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <!-- Tab panes Two Add  -->
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
                              <x-input-text  type="search" name="search"/>
                            </label>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table w-100 table-bordered">
                            <thead>
                              <tr class="table-primary">
                                <th>Name</th>
                                <th>Bangla Name</th>
                                <th>Head Nature</th>
                                <th>Is Other Payment</th>
                                <th>Log</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Basic</td>
                                <td>বেসিক</td>
                                <td>Additive</td>
                                <td>No</td>
                                <td>Create: Shonod Digital @ 2018-12-26 15:49:16 <br>
                                  Update: Shonod Digital @ 2020-02-07 03:40:53</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                        <i class="mdi mdi-pencil"></i>
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
                        <!-- Tab panes Two Close  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
