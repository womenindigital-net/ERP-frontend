@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between pb-3">
                        <div>
                            <h4 class="card-title">All Approved Journals list</h4>
                        </div>
                        <div class="">
                            <a href="accounting.journal" class="btn btn-outline-info waves-effect waves-light"><i
                                class="fas fa-plus-circle"></i> All Journals</a>
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
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th>Proj. id</th>
                                <th>Particulars</th>
                                <th>Trans. Amount</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-eye"></i>
                                </button>
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
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!--  Edit Journal -->
    <div id="viewmodal" class="modal fade journal-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"> Journal Voucher Approve Details 
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table table-bordered mb-0">
                            <tbody>
                                <tr data-id="1">
                                    <td data-field="id" style="">Project Name: Administration</td>
                                    <td data-field="name">Voucher Date: 2022-05-10 00:00:00</td>
                                </tr>
                                <tr data-id="2" style="border-bottom-style: none;">
                                    <td data-field="id" style="">
                                        Transaction Amount: 36433</td>
                                    <td data-field="name">Transaction Amount: 36433</td>
                                </tr>
                                <tr data-id="2" style="border-bottom-style: none;">
                                    <td data-field="id" style="">Particulars: Cash payment :Cash salary to be paid to the new staffs as 1. Jannatul Khuludh -Tk.5633/-, 2.Ms. Raksana Begum -7733/- 3. Sheyreen Binte Malek Tk.5200/-, 4. Bijoy Gharami Tk.10400/-, Md. Ridoy Hasan 7,467/- Cheque No: 6446620</td>
                                    <td data-field="name">Reference: 112</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center pt-5 pb-2"><h5>Posting Transaction Details</h5></div>
                        <table class="table table-bordered mb-0">
                            <thead>
                                <th>Acc. Number</th>
                                <th>Acc. Particular</th>
                                <th>Credit</th>
                                <th>Debit</th>

                            </thead>
                            <tbody>
                                <tr data-id="1">
                                    <td data-field="">Bank-The City Bank Ltd (3101829023001)::1050004</td>
                                    <td data-field="">Cash payment :Cash salary to be paid to the new staffs as 1. Jannatul Khuludh -Tk.5633/-, 2.Ms. Raksana Begum -7733/- 3. Sheyreen Binte Malek Tk.5200/-, 4. Bijoy Gharami Tk.10400/-, Md. Ridoy Hasan 7,467/- Cheque No: 6446620</td>
                                    <td data-field="" >36433</td>
                                    <td data-field=""></td>
                                </tr>
                                <tr data-id="2" style="">
                                    <td data-field="" >Administration Staff Salary::7550001</td>
                                    <td data-field="">Cash payment :Cash salary to be paid to the new staffs as 1. Jannatul Khuludh -Tk.5633/-, 2.Ms. Raksana Begum -7733/- 3. Sheyreen Binte Malek Tk.5200/-, 4. Bijoy Gharami Tk.10400/-, Md. Ridoy Hasan 7,467/- Cheque No: 6446620</td>
                                    <td data-field="" ></td>
                                    <td data-field="">36433</td>
                                </tr>
                                <tr data-id="2" style="">
                                    <td data-field="" ></td>
                                    <td data-field=""></td>
                                    <td data-field="" ></td>
                                    <td data-field=""></td>
                                </tr>
                                <tr data-id="2" style="">
                                    <td data-field="" ></td>
                                    <td data-field=""></td>
                                    <td data-field="" >36433</td>
                                    <td data-field="">36433</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered mb-0 mt-3">
                            <thead>
                                <th>Authorized Signature</th>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn  btn-success" id="sa-position"> Print</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
@endsection
@section('script')

    <!-- Init js -->
    <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>



@endsection
