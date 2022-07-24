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
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('setup.other-settings.academic-calender.create') }}" method="POST">
                                @csrf
                                <div class="modal-body p-0">
                                    <div class="card p-0 m-0">
                                        <div class="card-body">
                                            <div class="row pb-3">
                                                <div class="col-6 row">

                                                    <label class="col-4 col-form-label">Activity</label>
                                                    <div class="col-8">
                                                        <x-input-select name="student_id" :records="[]" />
                                                    </div>

                                                </div>
                                                <div class="col-6 row">

                                                    <label class="col-4 col-form-label">Domain Weight</label>
                                                    <div class="col-8">
                                                        <x-input-select name="student_id" :records="[]" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form class="repeater" enctype="multipart/form-data">
                                                                <div data-repeater-list="group-a">
                                                                    <div data-repeater-item class="row mt-3 removeRow">
                                                                        <div class=" col-lg-6 d-flex row">
                                                                            <div class="col-4">
                                                                                <label for="name" class="">Task
                                                                                    Name</label>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <x-input-text name="hello1" placeholder="">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" col-lg-6 d-flex row">
                                                                            <div class="col-4">
                                                                                <label for="name"
                                                                                    class="">Type</label>
                                                                            </div>
                                                                            <div class="col-8 d-flex">
                                                                                <x-input-select name="student_id"
                                                                                    :records="[]" />
                                                                                <div>
                                                                                    <button
                                                                                        class="btn btn-danger ms-2 removeBtn">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input data-repeater-create type="button"
                                                                    class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                        changes</button>
                                </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel1">
                            <div class="table-responsive">
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
                                          <th>Activity</th>
                                          <th>Task</th>
                                          <th> Log</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>first to last</td>
                                          <td>Demo</td>
                                          <td>Demo</td>
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
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- view -->
                <div class="modal fade tesk-view" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">TASK View</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card p-0 m-0">
                                    <div class="card-body">
                                        <div class="row pb-3">
                                            <div class="col-6 row">
                                                <label class="col-4 col-form-label">Activity</label>
                                                <div class="col-8">
                                                    <p class="form-control">General Play</p>
                                                </div>
                                            </div>
                                            <div class="col-6 row">
                                                <label class="col-4 col-form-label">Domain Weight</label>
                                                <div class="col-8">
                                                    <p class="form-control">Section E: Domain 01 - Physical</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row mt-3">
                                                            <div class=" col-lg-6 d-flex row">
                                                                <div class="col-4">
                                                                    <label for="name" class="">Task Name</label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="form-control">Playing On Swings</p>
                                                                </div>
                                                            </div>
                                                            <div class=" col-lg-4 d-flex row">
                                                                <div class="col-4">
                                                                    <label for="name" class="">Type</label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="form-control">Pre-Vocational</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class=" col-lg-6 d-flex row">
                                                                <div class="col-4">
                                                                    <label for="name" class="">Task Name</label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="form-control">Push and Pull Doors open and closed</p>
                                                                </div>
                                                            </div>
                                                            <div class=" col-lg-4 d-flex row">
                                                                <div class="col-4">
                                                                    <label for="name" class="">Type</label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="form-control">Pre-Vocational</p>
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
                            <!-- Tab panes One Add  -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-success  waves-light"
                                    data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                <button type="button" class="btn btn-outline-danger waves-effect waves-light"
                                    data-bs-dismiss="modal"> Close</button>
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
                                        <x-input-text type="search" name="search" />
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="table-primary">
                                            <th class="">Activity</th>
                                            <th class="">task</th>
                                            <th class="">Log</th>
                                            <th class="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>General Play</td>
                                            <td>Push and Pull Doors open and closed</td>
                                            <td>Create: Nusrat Jahan @ <br> 2019-06-09 22:22:54 <br>
                                                There is no update record.</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="bx bx-dollar"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="fas fa-arrow-circle-right"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
                                                <a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a>
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
