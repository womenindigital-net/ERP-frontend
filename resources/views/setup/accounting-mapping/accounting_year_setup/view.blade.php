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
                            <span class="d-none d-sm-block">Accounting Year Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Accounting Year List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
              <div class="tab-content p-3 text-muted">
              <div class="tab-pane active" id="home" role="tabpanel">
                  <p class="mb-0">
                      <div class="col-xl-8">
                          <div class="card">
                              <div class="card-body">
                                  <form>
                                      <div class="row mb-1 p-2">
                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year Name</label>
                                          <div class="col-sm-8">
                                            <x-input-text name="year_id" class="form-control" placeholder="Account year here">
                                            </x-input-text>
                                          </div>
                                      </div>
                                      <div class="row mb-1 p-2">
                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year Start</label>
                                          <div class="col-sm-8">
                                            <x-input-text name="year_start" type="date" class="form-control" >
                                            </x-input-text>
                                          </div>
                                      </div>
                                      <div class="row p-2">
                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year End</label>
                                          <div class="col-sm-8">
                                            <x-input-text name="year_end" type="date" class="form-control" >
                                            </x-input-text>
                                          </div>
                                      </div>
                                      <div class="row justify-content-end">
                                          <div class="col-sm-9">
                                              <div class="text-end">
                                                  <button type="button" class="btn  btn-danger" data-bs-dismiss="modal"> Close</button>
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
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Accounting Year Name</th>
                                            <th>Accounting Year Start</th>
                                            <th>Accounting Year End</th>
                                            <th>Log</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Acc-Year-2021-2022</td>
                                        <td>2021-07-01</td>
                                        <td>2022-06-30</td>
                                        <td><small>Create: Ohidul Hassan @ 2021-07-03 10:41:41
                                          There is no update record.</small></td>
                                        <td><button type="button"
                                          class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash-alt" id="sa-warning"></i></button></td>
                                      </tr>
                                    </tbody>
                                 </table>
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