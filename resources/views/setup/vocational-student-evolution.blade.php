@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">VOCATIONAL STUDENT EVALUTIONS</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
                class="fas fa-plus-circle"></i> Add</button>
          </div>
        </div>
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
                    <th>Student Name</th>
                    <th>Production Date</th>
                    <th>Total Product Category</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">Adiba Atiar</td>
                  <td class="text-center">2021-03-02</td>
                  <td class="text-center">1</td>
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
  </div> <!-- end col -->
</div> <!-- end row -->
<!--  Extra Large modal example -->
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary"> Add Vocational Student Evalution Create</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->  
                  <div class="col-md-12 d-flex">
                    <div class="col-md-6 pe-2  mb-3">
                      <label class="form-label">Select Name</label>
                      <x-input-select name="select_name" :records="[]" />
                    </div>
                    <div class="col-md-6 mb-3 ps-2 ">
                        <label class="form-label">Select Date</label>
                        <x-input-text name="Date" type="date" placeholder="dd/mm/yyyy"></x-input-text>
                    </div>
                  </div>
                  <div class="">
                      <h4 class="card-title">Assign Tasks</h4>
                      <form class="repeater" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col-1 p-0  text-center">
                                  <label for="category_name">Category Name</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="sub_category">Sub Category</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="no_of_production">No of Production</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="target">Target</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="wastage">Wastage</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="time_taken">Time Taken</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="work_quality">Work Quality</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="delivery_complete">Delivery Complete</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="follow_ins">Follow Ins.</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="generalization">Generalization</label>
                              </div>
                              <div class="col-1 p-0  text-center">
                                  <label for="adaption">Adaption</label>
                              </div>
                              <div class="col-1 p-0 ">
                                  <label for="remarks">Remarks</label>
                              </div>
                          </div>
                          <div data-repeater-list="group-a">
                              <div data-repeater-item class="row removeRow">
                                  <div  class="col-1 d-flex p-0 ps-2  pb-1 align-items-center">
                                    <x-input-select name="category_name" :records="[]" />
                                  </div>
                                  <div class=" col-1 p-0  pb-1">
                                  <x-input-select name="sub_category" :records="[]" />
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="no_of_production" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="target" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="wastage" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="time_taken" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="work_quality" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="delivery_complete" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="follow_ins" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="generalization" type="number"></x-input-text>
                                  </div>
                                  <div class=" col-1 p-0 pb-1">
                                      <x-input-text name="adaption" type="number"></x-input-text>
                                  </div>
                                  <div class="col-1 p-0 pb-1 align-self-center d-flex">
                                    <x-input-text name="remarks" type="text"></x-input-text>
                                      <button class="btn btn-outline-danger waves-effect waves-light removeBtn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                  </div>
                              </div> 
                          </div>
                          <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 me-5  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                      </form>
                  </div>
                  <!-- journal form end -->
                 </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection
@section('script')
    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection