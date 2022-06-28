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
                                    <x-input-text name="package_name" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                          </div>
                          <div class=" mb-3 d-flex row">
                              <div class="col-lg text-center">
                                  <label for="example-text-input" class=" col-form-label text-end" >Sunday</label>
                                  <div class=" ">
                                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                          <input type="radio" class="btn-check" name="btnradio1" id="btnradio4"  >
                                          <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                          <input type="radio" class="btn-check" name="btnradio1" id="btnradio5" checked>
                                          <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg text-center">
                                  <label for="example-text-input" class=" col-form-label " >Monday</label>
                                  <div class="">
                                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                          <input type="radio" class="btn-check" name="btnradio2" id="btnradio6" >
                                          <label class="btn btn-outline-success" for="btnradio6">Yes</label>
                                          <input type="radio" class="btn-check" name="btnradio2" id="btnradio7" checked>
                                          <label class="btn btn-outline-danger" for="btnradio7">No</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg text-center">
                                  <label for="example-text-input" class=" col-form-label text-end" >Tuesday</label>
                                  <div class="">
                                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                          <input type="radio" class="btn-check" name="btnradio3" id="btnradio8" autocomplete="off" >
                                          <label class="btn btn-outline-success" for="btnradio8">Yes</label>
                                          <input type="radio" class="btn-check" name="btnradio3" id="btnradio9" autocomplete="off" checked>
                                          <label class="btn btn-outline-danger" for="btnradio9">No</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg text-center">
                                  <label for="example-text-input" class=" col-form-label text-end" >Wednesday</label>
                                  <div class="">
                                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                          <input type="radio" class="btn-check" name="btnradio4" id="btnradio10" autocomplete="off" >
                                          <label class="btn btn-outline-success" for="btnradio10">Yes</label>
                                          <input type="radio" class="btn-check" name="btnradio4" id="btnradio11" autocomplete="off" checked>
                                          <label class="btn btn-outline-danger" for="btnradio11">No</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Thursday</label>
                                <div class="">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio5" id="btnradio12" autocomplete="off" >
                                        <label class="btn btn-outline-success" for="btnradio12">Yes</label>
                                        <input type="radio" class="btn-check" name="btnradio5" id="btnradio13" autocomplete="off" checked>
                                        <label class="btn btn-outline-danger" for="btnradio13">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Friday</label>
                                <div class="">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio6" id="btnradio14" autocomplete="off" >
                                        <label class="btn btn-outline-success" for="btnradio14">Yes</label>
                                        <input type="radio" class="btn-check" name="btnradio6" id="btnradio15" autocomplete="off" checked>
                                        <label class="btn btn-outline-danger" for="btnradio15">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Saturday</label>
                                <div class="">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio7" id="btnradio16" autocomplete="off" >
                                        <label class="btn btn-outline-success" for="btnradio16">Yes</label>
                                        <input type="radio" class="btn-check" name="btnradio7" id="btnradio17" autocomplete="off" checked>
                                        <label class="btn btn-outline-danger" for="btnradio17">No</label>
                                    </div>
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
                                <th>Sunday </th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Total Week End</th>
                                <th>log</th>
                                <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Cricket</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes </td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>No</td>
                                <td>Create: Karishma Cultural @ 2018-12-27 18:11:34</td>
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