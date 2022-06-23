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
                      <form action="{{route('setup.payroll-management.salary_step_setup.create')}}" method="POST">
                          @csrf
                          <div class="modal-body">
                            <div class="row p-5 pt-0 pb-0">
                                <div class="col-12 p-5 pb-3 pt-3"> 
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Project *</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="project_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Acc. No</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-text name="ac_id" type="number" class="form-control">
                                            </x-input-text>
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Start Date</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-text name="ac_id" type="date" class="form-control">
                                            </x-input-text>
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Published:</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <div class="square-switch">
                                                <input type="checkbox" id="square-switch3" switch="bool" checked />
                                                <label for="square-switch3" data-on-label="Yes"
                                                    data-off-label="No"></label>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                          </div>
                        <!-- Tab panes One Add  -->
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
                          <table class="table table-bordered w-100">
                            <thead>
                              <tr class="table-primary">
                                  <th class="text-center">Project</th>
                                  <th class="text-center">Closing Account Name</th>
                                  <th class="text-center">Start Date</th>
                                  <th class="text-center">Log</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td></td>
                                  <td></td>
                                  <td class="text-center">No data available in table</td>
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
                        <!-- Tab panes Two Close  -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
 <!-- form repeater js -->
  <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection