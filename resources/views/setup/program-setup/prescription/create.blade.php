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
                      <form action="{{route('setup.other-settings.academic-calender.create')}}" method="POST">
                          @csrf
                         <section>
                            <div class="row">
                              <div class="col-lg-4">
                                  <div class="mb-3">
                                    <label for="basicpill-lastname-input">Prescription Name:</label>
                                    <x-input-text name="hello1" placeholder="Prescription Name">
                                    </x-input-text>
                                  </div>
                                </div>
                              <div class="col-lg-4">
                                  <div class="mb-3">
                                    <label for="basicpill-lastname-input">Prescribe By:</label>
                                    <x-input-text name="hello1" placeholder="Prescribe By">
                                    </x-input-text>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <h2 class=" text-center mb-4">Raw Material Lists</h2>


                                <form class="repeater" enctype="multipart/form-data">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="row">
                                            <div class="mb-3 col-lg-2">
                                                <label for="name">Name</label>
                                                <x-input-text name="hello1" placeholder="">
                                                </x-input-text>
                                            </div>

                                            <div class="mb-3 col-lg-2">
                                                <label for="email">Email</label>
                                                <x-input-text name="hello1" placeholder="">
                                                </x-input-text>
                                            </div>

                                            <div class="mb-3 col-lg-2">
                                                <label for="subject">Subject</label>
                                                <x-input-text name="hello1" placeholder="">
                                                </x-input-text>
                                            </div>

                                            <div class="mb-3 col-lg-2">
                                                <label for="resume">Resume</label>
                                                <x-input-text name="hello1" placeholder="">
                                                </x-input-text>
                                            </div>

                                            <div class="mb-3 col-lg-2">
                                                <label for="message">Message</label>
                                                <x-input-textarea name="hello1" rows="1" placeholder="">
                                                </x-input-textarea>
                                            </div>

                                            <div class="col-sm-1 align-self-center">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-danger" value="Delete" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="mb-3">
                                </div>
                              </div>
                            </div>
                          </form>
                        </section>
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
                           <table id="datatable" class="table table-bordered dt-responsive  w-100">
                            <thead>
                              <tr class="table-primary">
                                <th>Student Name</th>
                                <th>Prescription Name</th>
                                <th>Prescribe By</th>
                                <th>Log</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Md. Moinul Islam Supta</td>
                                <td>Roger Oliver</td>
                                <td>Shonod Shonod</td>
                                <td>
                                  <span>Create: Nurjahan Dipa @ 2022-03-29 16:04:41</span>
                                  <br/>
                                  <span>Update: Ohidul Hassan @ 2022-04-12 11:36:44</span>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
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