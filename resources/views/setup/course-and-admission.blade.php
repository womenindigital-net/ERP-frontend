@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')Course @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">Course</h4>
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
              <input type="search" class="form-control form-control-sm" placeholder="">
            </label>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table w-100 table-bordered">
            <thead>
              <tr class="table-primary">
                <th>Course / Service Name</th>
                <th>Duration</th>
                <th>Cash Account</th>
                <th>Log</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Consultation Fees</td>
                <td>1</td>
                <td>1010 :: Cash Operating Account</td>
                <td>Create: Ohidul Hassan @ 2020-12-27 15:49:02 <br>
                  Update: Ohidul Hassan @ 2022-05-15 15:10:58 </td>
                <td>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                    <i class="mdi mdi-pencil"></i>
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
              <h5 class="modal-title text-primary">Course Create
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- journal form start -->
              <div class="col-md-12 d-flex">
                <div class="col-md-6 mb-3 text-center">
                    <label class="form-label">Course / Service Name</label>
                    <x-input-text name="Course"  placeholder="Course Name Here"></x-input-text>
                </div>
                <div class="col-md-6 ms-2  mb-3 text-center">
                    <label class="form-label">Duration</label>
                    <x-input-text name="Duration"  placeholder="Duration In Month ex:6"></x-input-text>
                </div>
              </div>  
              {{--  Cash Acc / Description  --}}
              <div class="col-md-12 d-flex">
                <div class="col-md-6 mb-3 text-center">
                    <label class="form-label">Cash Acc:</label>
                    <select name="CreditAcc" id="CreditAcc" class="form-control select2 form-select strip-tags" required="">
                        <option value="0">Select</option>
                        <option value="1"> 1561003 :: 10 Stations </option>
                        <option value="2"> 6205 :: 1st January New Year event </option>
                        <option value="3"> 8560 :: Accounting /Tally/ Audit/Legal expenses </option>
                        <option value="4"> 1200 :: Accounts Receivable </option>
                        <option value="5"> 7550002 :: Accounts Staff Salary </option>
                        <option value="6"> 2130 :: Accrued accounts payable </option>
                        <option value="7"> 2220 :: Accrued Commissions </option>
                        <option value="8"> 2200 :: Accrued Compensation </option>
                        <option value="9"> 2260 :: Accrued expenses </option>
                        <option value="10"> 1450 :: Accrued Income </option>
                        <option value="11"> 2240 :: Accrued Interest </option>
                        <option value="12"> 2270 :: Accrued paid leave </option>
                        <option value="13"> 2210 :: Accrued Payroll </option>
                    </select>
                </div>
                <div class="col-md-6 ms-2  mb-3 text-center">
                    <label class="form-label">Description:</label>
                    <x-input-textarea name="Description"  placeholder="Description"></x-input-textarea>
                </div>
              </div>    
          <div class="row">
            <div class="col-12 p-0">
                <div class="card">
                    <div class="card-body p-0">
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="product">Fee Heading</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="product">Acc No</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="total">Amount</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                <div data-repeater-item class="row">
                                    <div  class="col-lg-4 d-flex p-0 ps-4 pe-2 pb-1 align-items-center">
                                        <select id="formrow-inputState" class="form-select">
                                          <option value="0">Select</option>
                                          <option value="1"> 1561003 :: 10 Stations </option>
                                          <option value="2"> 6205 :: 1st January New Year event </option>
                                          <option value="3"> 8560 :: Accounting /Tally/ Audit/Legal expenses </option>
                                          <option value="4"> 1200 :: Accounts Receivable </option>
                                          <option value="5"> 7550002 :: Accounts Staff Salary </option>
                                          <option value="6"> 2130 :: Accrued accounts payable </option>
                                          <option value="7"> 2220 :: Accrued Commissions </option>
                                          <option value="8"> 2200 :: Accrued Compensation </option>
                                          <option value="9"> 2260 :: Accrued expenses </option>
                                          <option value="10"> 1450 :: Accrued Income </option>
                                          <option value="11"> 2240 :: Accrued Interest </option>
                                          <option value="12"> 2270 :: Accrued paid leave </option>
                                          <option value="13"> 2210 :: Accrued Payroll </option>   
                                        </select>
                                    </div>
                                    <div class=" col-lg-4 p-0 pe-2 ps-2 pb-1">
                                        <select id="formrow-inputState" class="form-select">
                                          <option value="1">Select</option>
                                          <option value="2"> 6205 :: 1st January New Year event </option>
                                          <option value="3"> 8560 :: Accounting /Tally/ Audit/Legal expenses </option>
                                          <option value="4"> 1200 :: Accounts Receivable </option>
                                          <option value="5"> 7550002 :: Accounts Staff Salary </option>
                                          <option value="6"> 2130 :: Accrued accounts payable </option>
                                          <option value="7"> 2220 :: Accrued Commissions </option>
                                          <option value="8"> 2200 :: Accrued Compensation </option>
                                          <option value="9"> 2260 :: Accrued expenses </option>
                                          <option value="10"> 1450 :: Accrued Income </option>
                                          <option value="11"> 2240 :: Accrued Interest </option>
                                          <option value="12"> 2270 :: Accrued paid leave </option>
                                          <option value="13"> 2210 :: Accrued Payroll </option>  
                                        </select>
                                    </div>
                                    <div class="col-lg-4 p-0 pe-4 ps-2 pe-2 pb-1 align-self-center d-flex">
                                      <x-input-text name="Amount" type="number"  placeholder="Amount"></x-input-text>
                                        <button class="btn btn-outline-danger waves-effect waves-light ms-2">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                    </div>
                                </div> 
                            </div>
                            <div class="ms-2">
                            <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 ms-1  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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