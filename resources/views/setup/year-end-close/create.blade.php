@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Stock Count Adjustment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Stock Count List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <p class="mb-0">
                      <div class="col-xl-10">
                          <div class="card">
                              <div class="card-body p-0">
                                  <form>
                                    <div class="row pt-3">
                                        <div class="col-8">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label ">Warehouse</label>
                                                <div class="col-md-6">
                                                    <x-input-select name="warehouse_id"
                                                     :records="[]" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" id="horizontal-firstname-input" placeholder="dd/mm/yyyy ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </form>
                                <div class="col-12">
                                    <h4 class="card-title">Assign Tasks</h4>
                                    <form class="repeater" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-2 p-0 ps-4">
                                                <label for="product">SL</label>
                                            </div>
                                            <div class="col-2 p-0">
                                                <label for="product">Salary Head</label>
                                            </div>
                                            <div class="col-3 p-0 text-center">
                                                <label for="total">Pay Amount</label>
                                            </div>
                                            <div class="col-2 p-0  text-center">
                                                <label for="product">Percent Field</label>
                                            </div>
                                            <div class="col-3 p-0 text-center">
                                                <label for="total">Basic/Provident</label>
                                            </div>
                                        </div>
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row removeRow">
                                                <div  class="col-1 d-flex  ps-4 pb-1">
                                                    <label>01</label>
                                                </div>
                                                <div class=" col-3  pb-1">
                                                    <x-input-select name="student_id"
                                                    :records="[]" />
                                                </div>
                                                <div class=" col-3  pb-1">
                                                    <x-input-select name="student_id"
                                                    :records="[]" />
                                                </div>
                                                <div class=" col-2  pb-1">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                                <div class="col-3  pb-1 align-self-center d-flex">
                                                    <input type="number" class="form-control"/>
                                                    <button class="btn btn-outline-danger waves-effect waves-light removeBtn">
                                                      <i class="fas fa-trash-alt"></i>
                                                  </button>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="">
                                        <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 me-5 mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                                       </div>
                                    </form>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="row mb-2">
                                                <label for="horizontal-firstname-input" class="col-3 text-end col-form-label">Note</label>
                                                <div class="col-9">
                                                <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Enter Note Here ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Reset</button>
                                    </div>
                                </div>
                              </div>
                              <!-- end card body -->
                          </div>
                          <!-- end card -->
                      </div>
                  </p>
              </div>
            <div class="tab-pane" id="profile" role="tabpanel">
                <livewire:year-end-close-list/>
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
