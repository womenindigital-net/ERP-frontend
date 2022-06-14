@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<style>
  .over {
      overflow:auto;
      width: 4000px;
  }
  .wid{
    width: 3950px;
  }
</style>
@endsection

@section('content')
<div class="row">
  <div class="col-xl-12">
      <div class="card">
          <div class="card-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                          <span class="d-none d-sm-block">Budget Review Setup</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Budget Review List</span>
                      </a>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel ">
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card ms-0">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted mt-4">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                             <div class="row">
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                           <div class="row mb-4">
                                                              <div class="col-3 p-0 d-flex align-items-center">
                                                                <h6>Project</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <x-input-select name="project_id"
                                                                :records="[]" />
                                                               </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                              <div class="col-3 p-0 d-flex align-items-center">
                                                                <h6>Start Date</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text type="date" name="date" class="form-control" placeholder="">
                                                                  </x-input-text>
                                                                </div>
                                                               </div>
                                                              </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                           <div class="row mb-4">
                                                              <div class="col-2 p-0 d-flex align-items-center">
                                                                <h6>Name</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <x-input-text name="f_name" class="form-control" placeholder="">
                                                                </x-input-text>
                                                               </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                              <div class="col-2 p-0 d-flex align-items-center">
                                                                <h6>End Date</h6>
                                                              </div>
                                                               <div class="col-7">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text type="date" name="date" class="form-control" placeholder="">
                                                                  </x-input-text>
                                                                </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                             </div>
                                             <div class="row">
                                              <div class="col-lg-5">
                                                  <div class="mb-3 mt-4 d-flex justify-content-end">
                                                      <div><h5>Requested Amount</h5></div>
                                                      <div><span id="totlRqstdAmnt" class="purchaseInfo ms-2 border p-1">NaN</span></div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-5">
                                                  <div class="mb-3 mt-4 d-flex justify-content-end">
                                                      <div><h5>Reviewed Amount</h5></div>
                                                      <div><span id="totlRqstdAmnt" class="purchaseInfo ms-2 border p-1">1</span></div>
                                                  </div>
                                              </div>
                                           </div>
                                           <table  class="table table-bordered mt-5 p-0 dt-responsive w-100">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>SL</th>
                                                    <th>Budget Head</th>
                                                    <th>Account</th>
                                                    <th>Approved Amount</th>
                                                    <th>Expense Amount</th>
                                                    <th>Reserve Amount</th>
                                                    <th>Remaining Amount</th>
                                                    <th>Reviewed Amount</th>
                                                    <th>Note</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="p-0"><input type="number" class="form-control border-0"></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="p-0"><input type="number" class="form-control border-0"></td>
                                                  <td></td>
                                                </tr>

                                            </tbody>
                                          </table>
                                         <div class="row">
                                            <div class="col-lg-8">
                                                <div class="mb-3 mt-4 ">
                                                    <div class="row">
                                                        <div class="col-4 p-0 d-flex align-items-center justify-content-center">
                                                            <div class="mt-2"><h5>Note</h5></div>
                                                        </div>
                                                        <div class="col-8">
                                                          <x-input-text name="note" class="form-control" placeholder="">
                                                          </x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mt-4 ">
                                                    <div class="row">
                                                        <div class="col-6 p-0 d-flex align-items-end justify-content-center">
                                                            <div class="mt-2"><h5>Is Active</h5></div>
                                                        </div>
                                                        <div class="col-6 form-check-danger mt-2">
                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                             <div class="row d-flex justify-content-end mt-4">
                                              <div class="col-2">
                                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                                  <button class="btn btn-success w-100">Save</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">

                    <table id="datatable" class="table table-bordered dt-responsive w-100 ">
                      <thead>
                          <tr class="table-primary">
                              <th>Project</th>
                              <th>Budget Name</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Requested Amount</th>
                              <th>Approved Amount</th>
                              <th>Status</th>
                              <th class="">Is sent for approval</th>
                              <th>Note</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Programme</td>
                              <td>Program Budget (2021-2022)</td>
                              <td></td>
                              <td></td>
                              <td>1304012.00</td>
                              <td>1304012.00</td>
                              <td>A</td>
                              <td>N</td>
                              <td></td>
                              <td>Create: Ohidul Hassan @ 2021-07-14 05:11:42
                                Update: Sajida Rahman @ 2021-07-14 11:57:19</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="fas fa-eye"></i>
                                </button>
                              </td>
                          </tr>
                      </tbody>
                    </table>

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
@section('script')
@endsection
