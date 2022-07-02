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
                        <div class="modal-body p-0">
                            <div class="container">
                                <div class="row d-flex">
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Organization Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="institute_name" type="text"
                                            placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div> 
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Contact Person:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="address" type="text"
                                            placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div> 
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Address:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="note" type="text"
                                            placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Phone:</label>
                                        <div class="col-md-8">
                                            <x-input-text type="number" name="note" type="text"
                                            placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class=" d-flex justify-content-end gap-1">
                                    <div>
                                        <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">Save</button>
                                    </div>
                                    </div>                                    
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
                                <input type="search" class="form-control form-control-sm" placeholder="">
                            </label>
                            </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th> Name</th>
                                <th>Contact Person</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>PFDA</td>
                                <td>maria sarah</td>
                                <td></td>
                                <td></td>
                                <td>Create: Shonod Digital @ 2018-12-26 20:09:52</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target="#material-callects-modal-xl-view">
                                    <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
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
                <div class="modal fade material-callects-modal-xl-view" id="material-callects-modal-xl-view" tabindex="-2" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-primary"> Organization Details
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-success mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Org Name</th>
                                                <td>PFDA</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Org Cont Person	</th>
                                                <td>maria sarah</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Org Address</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Org Phone</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Is Active</th>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Org Phone</th>
                                                <td>Yes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn font-size-14 btn-danger" data-bs-dismiss="modal"> Print</button>
                                <button type="button" class="btn font-size-14 btn-success" id="sa-position" data-bs-dismiss="modal"> Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection